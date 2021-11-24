<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\Aggregate;

use DateTime;

/**
 * Class PaymentWithDate.
 */
class PaymentWithDate
{
    /**
     * PaymentWithDate constructor.
     */
    public function __construct(private DateTime $paidAt = null, private PaymentAmount $payment = null)
    {
    }

    public function getPaidAt(): DateTime
    {
        return $this->paidAt;
    }

    public function setPaidAt(DateTime $paidAt): void
    {
        $this->paidAt = $paidAt;
    }

    public function getPayment(): PaymentAmount
    {
        return $this->payment;
    }

    public function setPayment(PaymentAmount $payment): void
    {
        $this->payment = $payment;
    }
}
