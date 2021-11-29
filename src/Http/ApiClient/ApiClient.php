<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Http\ApiClient;

use Http\Client\HttpClient;
use League\OAuth2\Client\Provider\AbstractProvider;
use League\OAuth2\Client\Token\AccessToken;
use Nascom\OAuth2\Client\Provider\Teamleader;
use Psr\Http\Message\ResponseInterface;
use QR\TeamleaderApiClient\Request\Attributes\Filter\FilterInterface;
use QR\TeamleaderApiClient\Request\Attributes\Page\PageInterface;
use QR\TeamleaderApiClient\Request\Attributes\Sort\SortInterface;
use QR\TeamleaderApiClient\Request\RequestInterface;

class ApiClient implements ApiClientInterface
{
    private string $defaultMethod;

    public function __construct(
        protected AbstractProvider $provider,
        protected HttpClient $httpClient,
        private AccessToken $accessToken,
        array $options = []
    ) {
        $this->defaultMethod = $options['default_method'] ?? 'GET';
    }

    /**
     * {@inheritdoc}
     */
    public function handle(RequestInterface $request): ResponseInterface
    {
        $options = [];

        if ($request->isV1()) {
            $options['headers']['content-type'] = 'application/x-www-form-urlencoded';
        } else {
            $options['headers']['content-type'] = 'application/json';
        }

        if (!isset($options['headers']['X-Api-Version'])) {
            $options['headers']['X-Api-Version'] = '2021-09-01';
        }

        $body = $request->getBody();

        array_walk_recursive($body, function (&$val): void {
            if ($val instanceof \DateTime) {
                $val = $val->format('Y-m-d');
            }
        });

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
            if ($request->isV1()) {
                $options['body'] = http_build_query($body);
            } else {
                $options['body'] = json_encode($body);
            }
        }

        $baseUrl = $request->isV1() ? 'https://app.teamleader.eu/' : Teamleader::API_BASE_URL;

        $psrRequest = $this->provider->getAuthenticatedRequest(
            $request->getMethod() ?: $this->defaultMethod,
            $baseUrl.$request->getEndpoint(),
            $this->accessToken,
            $options
        );

        return $this->httpClient->sendRequest($psrRequest);
    }
}
