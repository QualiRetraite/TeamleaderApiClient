<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\Aggregate;

/**
 * Class InvoiceeMinimal.
 */
class InvoiceeMinimal
{
    private ?string $name = null;

    private ?string $vatNumber = null;

    private ?\QR\TeamleaderApiClient\Model\Aggregate\LinkedCustomer $customer = null;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getVatNumber(): string
    {
        return $this->vatNumber;
    }

    public function setVatNumber(string $vatNumber): void
    {
        $this->vatNumber = $vatNumber;
    }

    public function getCustomer(): LinkedCustomer
    {
        return $this->customer;
    }

    public function setCustomer(LinkedCustomer $customer): void
    {
        $this->customer = $customer;
    }
}
