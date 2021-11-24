<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\WorkType;

use QR\TeamleaderApiClient\Model\ModelBase;

/**
 * Class WorkType.
 */
abstract class WorkTypeBase extends ModelBase
{
    private ?string $name = null;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
}
