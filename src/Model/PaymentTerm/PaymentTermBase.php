<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\PaymentTerm;

use QR\TeamleaderApiClient\Model\ModelBase;

/**
 * Class PaymentTermBase.
 */
abstract class PaymentTermBase extends ModelBase
{
    private ?string $type = null;

    private ?int $days = null;

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getDays(): int
    {
        return $this->days;
    }

    public function setDays(int $days): void
    {
        $this->days = $days;
    }
}
