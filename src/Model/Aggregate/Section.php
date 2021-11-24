<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\Aggregate;

/**
 * Class Section.
 */
class Section
{
    /**
     * Section constructor.
     *
     * @param string|null $title
     */
    public function __construct(private $title = null)
    {
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
}
