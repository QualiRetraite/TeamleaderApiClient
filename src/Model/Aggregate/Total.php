<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\Aggregate;

/**
 * Class Total.
 */
class Total
{
    private ?\QR\TeamleaderApiClient\Model\Aggregate\PaymentAmount $taxExclusive = null;

    private ?\QR\TeamleaderApiClient\Model\Aggregate\PaymentAmount $taxInclusive = null;

    private ?\QR\TeamleaderApiClient\Model\Aggregate\PaymentAmount $payable = null;

    /**
     * @var InvoiceTax[]
     */
    private ?array $taxes = null;

    public function getTaxExclusive(): PaymentAmount
    {
        return $this->taxExclusive;
    }

    public function setTaxExclusive(PaymentAmount $taxExclusive): void
    {
        $this->taxExclusive = $taxExclusive;
    }

    public function getTaxInclusive(): PaymentAmount
    {
        return $this->taxInclusive;
    }

    public function setTaxInclusive(PaymentAmount $taxInclusive): void
    {
        $this->taxInclusive = $taxInclusive;
    }

    public function getPayable(): PaymentAmount
    {
        return $this->payable;
    }

    public function setPayable(PaymentAmount $payable): void
    {
        $this->payable = $payable;
    }

    /**
     * @return InvoiceTax[]
     */
    public function getTaxes(): array
    {
        return $this->taxes;
    }

    /**
     * @param InvoiceTax[] $taxes
     */
    public function setTaxes(array $taxes): void
    {
        $this->taxes = $taxes;
    }
}
