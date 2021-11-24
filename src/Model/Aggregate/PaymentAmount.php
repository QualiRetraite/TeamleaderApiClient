<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\Aggregate;

/**
 * Class PaymentAmount.
 */
class PaymentAmount
{
    /**
     * PaymentAmount constructor.
     *
     * @param float|null  $amount
     * @param string|null $currency
     */
    public function __construct(private $amount = null, private $currency = null)
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
}
