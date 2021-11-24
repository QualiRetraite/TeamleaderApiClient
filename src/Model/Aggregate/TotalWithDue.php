<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\Aggregate;

/**
 * Class TotalWithDue.
 */
class TotalWithDue extends Total
{
    private ?\QR\TeamleaderApiClient\Model\Aggregate\PaymentAmount $due = null;

    public function getDue(): PaymentAmount
    {
        return $this->due;
    }

    public function setDue(PaymentAmount $due): void
    {
        $this->due = $due;
    }
}
