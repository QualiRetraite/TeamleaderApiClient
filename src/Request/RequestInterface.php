<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request;

interface RequestInterface
{
    public function getMethod(): string;

    public function getEndpoint(): string;

    public function getBody(): array;

    public function isV1(): bool;
}
