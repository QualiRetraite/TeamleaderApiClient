<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\Aggregate;

/**
 * Class InvoiceTax.
 */
class InvoiceTax extends Tax
{
    private ?\QR\TeamleaderApiClient\Model\Aggregate\PaymentAmount $taxable = null;

    private ?\QR\TeamleaderApiClient\Model\Aggregate\PaymentAmount $tax = null;

    public function getTaxable(): PaymentAmount
    {
        return $this->taxable;
    }

    public function setTaxable(PaymentAmount $taxable): void
    {
        $this->taxable = $taxable;
    }

    public function getTax(): PaymentAmount
    {
        return $this->tax;
    }

    public function setTax(PaymentAmount $tax): void
    {
        $this->tax = $tax;
    }
}
