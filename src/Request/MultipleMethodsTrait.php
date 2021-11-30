<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request;

trait MultipleMethodsTrait
{
    protected ?string $method = null;

    public function setMethod(string $method): void
    {
        $this->method = $method;
    }

    public function getMethod(): string
    {
        return $this->method ?: parent::getMethod();
    }
}
