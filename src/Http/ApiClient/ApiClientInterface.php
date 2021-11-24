<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Http\ApiClient;

use QR\TeamleaderApiClient\Request\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Interface ApiClientInterface.
 */
interface ApiClientInterface
{
    /**
     * @return ResponseInterface
     *
     * @throws \Http\Client\Exception
     */
    public function handle(RequestInterface $request);
}
