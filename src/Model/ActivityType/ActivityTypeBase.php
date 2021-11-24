<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\ActivityType;

use QR\TeamleaderApiClient\Model\ModelBase;

/**
 * Class ActivityTypeBase.
 */
abstract class ActivityTypeBase extends ModelBase
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
