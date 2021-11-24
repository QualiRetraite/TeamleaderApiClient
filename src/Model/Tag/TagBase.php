<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\Tag;

/**
 * Class TagBase.
 */
abstract class TagBase
{
    /**
     * @var string[]
     */
    private ?array $tag = null;

    /**
     * @return string[]
     */
    public function getTag(): array
    {
        return $this->tag;
    }

    /**
     * @param string[] $tag
     */
    public function setTag(array $tag): void
    {
        $this->tag = $tag;
    }
}
