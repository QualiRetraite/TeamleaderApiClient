<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\Attributes\Filter;

/**
 * Interface FilterInterface.
 */
interface FilterInterface
{
    public function setFilters(array $filers = []);

    /**
     * @return array
     */
    public function getFilters();
}
