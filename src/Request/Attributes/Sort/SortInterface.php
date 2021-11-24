<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\Attributes\Sort;

/**
 * Interface SortInterface.
 */
interface SortInterface
{
    public function setSort(array $sort = []);

    /**
     * @return array
     */
    public function getSort();
}
