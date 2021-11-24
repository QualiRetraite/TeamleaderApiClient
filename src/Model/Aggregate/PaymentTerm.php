<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\Aggregate;

/**
 * Class PaymentTerm.
 */
class PaymentTerm
{
    /**
     * PaymentTerm constructor.
     *
     * @param string|null $type
     * @param string|null $days
     */
    public function __construct(private $type = null, private $days = null)
    {
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getDays(): string
    {
        return $this->days;
    }

    public function setDays(string $days): void
    {
        $this->days = $days;
    }
}
