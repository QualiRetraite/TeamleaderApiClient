<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\Aggregate;

/**
 * Class InvoicingPreference.
 */
class InvoicingPreference
{
    private ?bool $electronicInvoicingAddress = null;

    public function getElectronicInvoicingAddress(): bool
    {
        return $this->electronicInvoicingAddress;
    }

    public function setElectronicInvoicingAddress(bool $electronicInvoicingAddress): void
    {
        $this->electronicInvoicingAddress = $electronicInvoicingAddress;
    }
}
