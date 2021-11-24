<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request;

/**
 * Trait MultipleMethodsTrait.
 */
trait MultipleMethodsTrait
{
    /**
     * @var string|null
     */
    protected $method;

    public function setMethod(string $method): void
    {
        $this->method = $method;
    }

    /**
     * @return string|null
     */
    public function getMethod()
    {
        return $this->method ?: parent::getMethod();
    }
}
