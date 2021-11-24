<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\Attributes\Filter;

/**
 * Trait FilterTrait.
 */
trait FilterTrait
{
    /**
     * @var array
     */
    protected $filters;

    public function setFilters(array $filters = []): void
    {
        $this->filters = $filters;
    }

    /**
     * @return array
     */
    public function getFilters()
    {
        return $this->filters;
    }
}
