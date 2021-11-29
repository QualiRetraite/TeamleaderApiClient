<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Http\ApiClient;

use Psr\Http\Client\ClientExceptionInterface;
use QR\TeamleaderApiClient\Request\RequestInterface;
use Psr\Http\Message\ResponseInterface;

interface ApiClientInterface
{
    /**
     * @throws ClientExceptionInterface
     */
    public function handle(RequestInterface $request): ResponseInterface;
}
