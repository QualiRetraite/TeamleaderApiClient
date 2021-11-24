<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\Department;

use QR\TeamleaderApiClient\Model\ModelBase;

/**
 * Class DepartmentBase.
 */
abstract class DepartmentBase extends ModelBase
{
    private ?string $name = null;

    private ?string $vatNumber = null;

    private ?string $currency = null;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getVatNumber()
    {
        return $this->vatNumber;
    }

    public function setVatNumber(string $vatNumber): void
    {
        $this->vatNumber = $vatNumber;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }
}
