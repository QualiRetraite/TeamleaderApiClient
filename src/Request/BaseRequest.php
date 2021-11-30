<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request;

abstract class BaseRequest implements RequestInterface
{
    protected array $body = [];

    public function getBody(): array
    {
        return $this->body;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function isV1(): bool
    {
        return false;
    }
}
