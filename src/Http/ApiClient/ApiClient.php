<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Http\ApiClient;

use Http\Client\HttpClient;
use League\OAuth2\Client\Provider\AbstractProvider;
use League\OAuth2\Client\Token\AccessToken;
use Nascom\OAuth2\Client\Provider\Teamleader;
use QR\TeamleaderApiClient\Request\Attributes\Filter\FilterInterface;
use QR\TeamleaderApiClient\Request\Attributes\Page\PageInterface;
use QR\TeamleaderApiClient\Request\Attributes\Sort\SortInterface;
use QR\TeamleaderApiClient\Request\RequestInterface;

/**
 * Class ApiClient.
 */
class ApiClient implements ApiClientInterface
{
    /**
     * @var string
     */
    private $defaultMethod;

    /**
     * ApiClient constructor.
     *
     * @param array $options
     *                       An associative array of options. Supports the following values:
     *                       - `default_method`: the default method to use when a requests supports
     *                       multiple methods.
     */
    public function __construct(
        protected AbstractProvider $provider,
        protected HttpClient $httpClient,
        private AccessToken $accessToken,
        array $options = []
    ) {
        $this->defaultMethod = $options['default_method']
            ?? 'GET';
    }

    /**
     * {@inheritdoc}
     */
    public function handle(RequestInterface $request): \Psr\Http\Message\ResponseInterface
    {
        $options = [];
        $body = $request->getBody();

        if ($request instanceof FilterInterface) {
            if (!empty($filters = $request->getFilters())) {
                foreach ($filters as $filter => $value) {
                    $body['filter'][$filter] = $value;
                }
            }
        }

        if ($request instanceof SortInterface) {
            if (!empty($sort = $request->getSort())) {
                foreach ($sort as $field => $order) {
                    $body['sort'][] = [
                        'field' => $field,
                        'order' => $order,
                    ];
                }
            }
        }

        if ($request instanceof PageInterface) {
            if (!empty($page = $request->getPage())) {
                $body['page'] = $page;
            }
        }

        if (!empty($body)) {
            $options['body'] = json_encode($body);
        }

        $psrRequest = $this->provider->getAuthenticatedRequest(
            $request->getMethod() ?: $this->defaultMethod,
            Teamleader::API_BASE_URL.$request->getEndpoint(),
            $this->accessToken,
            $options
        );

        return $this->httpClient->sendRequest($psrRequest);
    }
}
