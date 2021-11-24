<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\Attributes\Sort;

/**
 * Trait SortTrait.
 */
trait SortTrait
{
    /**
     * @var array
     */
    protected $sort;

    public function setSort(array $sort = []): void
    {
        $this->sort = $sort;
    }

    /**
     * @return array
     */
    public function getSort()
    {
        return $this->sort;
    }
}
