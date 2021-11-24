<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\Aggregate;

/**
 * Class CalculatedTotal.
 */
class CalculatedTotal
{
    private ?\QR\TeamleaderApiClient\Model\Aggregate\PaymentAmount $taxExclusive = null;

    private ?\QR\TeamleaderApiClient\Model\Aggregate\PaymentAmount $taxExclusiveBeforeDiscount = null;

    private ?\QR\TeamleaderApiClient\Model\Aggregate\PaymentAmount $taxInclusive = null;

    private ?\QR\TeamleaderApiClient\Model\Aggregate\PaymentAmount $taxInclusiveBeforeDiscount = null;

    public function getTaxExclusive(): PaymentAmount
    {
        return $this->taxExclusive;
    }

    public function setTaxExclusive(PaymentAmount $taxExclusive): void
    {
        $this->taxExclusive = $taxExclusive;
    }

    public function getTaxExclusiveBeforeDiscount(): PaymentAmount
    {
        return $this->taxExclusiveBeforeDiscount;
    }

    public function setTaxExclusiveBeforeDiscount(PaymentAmount $taxExclusiveBeforeDiscount): void
    {
        $this->taxExclusiveBeforeDiscount = $taxExclusiveBeforeDiscount;
    }

    public function getTaxInclusive(): PaymentAmount
    {
        return $this->taxInclusive;
    }

    public function setTaxInclusive(PaymentAmount $taxInclusive): void
    {
        $this->taxInclusive = $taxInclusive;
    }

    public function getTaxInclusiveBeforeDiscount(): PaymentAmount
    {
        return $this->taxInclusiveBeforeDiscount;
    }

    public function setTaxInclusiveBeforeDiscount(PaymentAmount $taxInclusiveBeforeDiscount): void
    {
        $this->taxInclusiveBeforeDiscount = $taxInclusiveBeforeDiscount;
    }
}
