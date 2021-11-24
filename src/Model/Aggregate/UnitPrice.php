<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\Aggregate;

/**
 * Class UnitPrice.
 */
class UnitPrice
{
    /**
     * UnitPrice constructor.
     *
     * @param float|null  $amount
     * @param string|null $currency
     * @param string|null $tax
     */
    public function __construct(private $amount = null, private $currency = null, private $tax = null)
    {
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    public function getTax(): string
    {
        return $this->tax;
    }

    public function setTax(string $tax): void
    {
        $this->tax = $tax;
    }
}
