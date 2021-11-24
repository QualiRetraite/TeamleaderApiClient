<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Http\Guzzle;

use GuzzleHttp\HandlerStack;
use Http\Adapter\Guzzle6\Client;
use League\OAuth2\Client\Provider\AbstractProvider;
use League\OAuth2\Client\Token\AccessToken;
use QR\TeamleaderApiClient\Http\ApiClient\ApiClient;
use QR\TeamleaderApiClient\Http\Guzzle\Middleware\RefreshTokenMiddleware;
use GuzzleHttp\Client as GuzzleHttpClient;

/**
 * Class GuzzleApiClientFactory.
 */
class GuzzleApiClientFactory
{
    public static function create(
        AbstractProvider $provider,
        AccessToken|array $accessToken,
        array $config = []
    ): ApiClient {
        if (!isset($config['handler'])) {
            if (!isset($config['callback'])) {
                $config['callback'] = null;
            }
            $handler = self::initialiseHandlerStack(
                $provider,
                $accessToken,
                $config['callback']
            );

            $config['handler'] = $handler;
        }

        $httpClient = new GuzzleHttpClient($config);
        $psrClient = new Client($httpClient);

        return new ApiClient($provider, $psrClient, $accessToken);
    }

    protected static function initialiseHandlerStack(
        AbstractProvider $provider,
        AccessToken $accessToken,
        callable $refreshTokenCallback = null
    ): HandlerStack {
        $handlerStack = HandlerStack::create();
        $refreshMiddleware = new RefreshTokenMiddleware(
            $provider,
            $accessToken,
            $refreshTokenCallback
        );
        $handlerStack->push($refreshMiddleware);

        return $handlerStack;
    }
}
