<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\WithholdingTaxRate;

use QR\TeamleaderApiClient\Model\Aggregate\LinkedDepartment;
use QR\TeamleaderApiClient\Model\ModelBase;

/**
 * Class WithholdingTaxRateBase.
 */
class WithholdingTaxRateBase extends ModelBase
{
    private ?\QR\TeamleaderApiClient\Model\Aggregate\LinkedDepartment $department = null;

    private ?string $description = null;

    private ?int $rate = null;

    public function getDepartment(): LinkedDepartment
    {
        return $this->department;
    }

    public function setDepartment(LinkedDepartment $department): void
    {
        $this->department = $department;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getRate(): int
    {
        return $this->rate;
    }

    public function setRate(int $rate): void
    {
        $this->rate = $rate;
    }
}
