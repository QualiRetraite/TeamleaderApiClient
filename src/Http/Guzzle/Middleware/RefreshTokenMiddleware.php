<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Http\Guzzle\Middleware;

use League\OAuth2\Client\Provider\AbstractProvider;
use League\OAuth2\Client\Token\AccessToken;
use Psr\Http\Message\RequestInterface;

/**
 * Class RefreshTokenMiddleware.
 */
class RefreshTokenMiddleware
{
    public const EXPIRES_AT_DELTA = 60 * 5;

    /**
     * @var callable
     */
    private $refreshTokenCallback;

    /**
     * AuthenticationMiddleware constructor.
     */
    public function __construct(
        private AbstractProvider $provider,
        private AccessToken $token,
        callable $refreshTokenCallback = null
    ) {
        $this->refreshTokenCallback = $refreshTokenCallback;
    }

    public function __invoke(callable $handler)
    {
        return function (RequestInterface $request, array $options) use ($handler) {
            if ($this->isExpired($this->token)) {
                $this->refreshToken();
                $request = $request->withHeader('Authorization', 'Bearer '.$this->token->getToken());
            }

            return $handler($request, $options);
        };
    }

    /**
     * @throws \League\OAuth2\Client\Provider\Exception\IdentityProviderException
     */
    private function refreshToken(): void
    {
        $this->token = $this->provider->getAccessToken(
            'refresh_token',
            [
                'refresh_token' => $this->token->getRefreshToken(),
            ]
        );

        if ($this->refreshTokenCallback) {
            \call_user_func($this->refreshTokenCallback, $this->token);
        }
    }

    /**
     * It is possible that the API's time and our time is not completely in
     * sync, or that there is a bit of latency. If we send the request a few
     * moments before the expiry, this could cause our request to be denied
     * with a "401: Access token expired".
     *
     * Because of this reason, we'll treat the token as expired a bit before
     * it actually expires (currently 5 minutes).
     *
     * @see https://github.com/Nascom/TeamleaderApiClient/issues/16
     */
    private function isExpired(AccessToken $token): bool
    {
        $expiresAt = $token->getExpires() - self::EXPIRES_AT_DELTA;

        return $expiresAt < time();
    }
}
