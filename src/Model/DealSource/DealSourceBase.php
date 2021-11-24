<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\DealSource;

use QR\TeamleaderApiClient\Model\ModelBase;

/**
 * Class DealSourceBase.
 */
abstract class DealSourceBase extends ModelBase
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
