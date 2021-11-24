<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\Attributes\Page;

/**
 * Interface PageInterface.
 */
interface PageInterface
{
    public function setPage(array $page = []);

    /**
     * @return array
     */
    public function getPage();
}
