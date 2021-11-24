<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\Attributes\Page;

/**
 * Trait PageTrait.
 */
trait PageTrait
{
    /**
     * @var array
     */
    protected $page;

    public function setPage(array $page = []): void
    {
        $this->page = $page;
    }

    /**
     * @return array
     */
    public function getPage()
    {
        return $this->page;
    }
}
