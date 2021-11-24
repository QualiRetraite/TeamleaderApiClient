<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\BusinessType;

use QR\TeamleaderApiClient\Model\ModelBase;

/**
 * Class LinkedBusinessType.
 */
abstract class BusinessTypeBase extends ModelBase
{
    private ?string $name = null;

    private ?string $country = null;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function setCountry(string $country): void
    {
        $this->country = $country;
    }
}
