<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\TaxRate;

use QR\TeamleaderApiClient\Model\Aggregate\LinkedDepartment;
use QR\TeamleaderApiClient\Model\ModelBase;

/**
 * Class TaxRateBase.
 */
abstract class TaxRateBase extends ModelBase
{
    private ?string $description = null;

    private ?string $rate = null;

    private ?\QR\TeamleaderApiClient\Model\Aggregate\LinkedDepartment $department = null;

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getRate(): string
    {
        return $this->rate;
    }

    public function setRate(string $rate): void
    {
        $this->rate = $rate;
    }

    public function getDepartment(): LinkedDepartment
    {
        return $this->department;
    }

    public function setDepartment(LinkedDepartment $department): void
    {
        $this->department = $department;
    }
}
