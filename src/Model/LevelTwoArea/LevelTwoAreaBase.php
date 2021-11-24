<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\LevelTwoArea;

use QR\TeamleaderApiClient\Model\ModelBase;

/**
 * Class LevelTwoAreaBase.
 */
abstract class LevelTwoAreaBase extends ModelBase
{
    private ?string $country = null;

    private ?string $name = null;

    public function getCountry(): string
    {
        return $this->country;
    }

    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
}
