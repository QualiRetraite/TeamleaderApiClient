<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\Aggregate;

/**
 * Class Telephone.
 */
class Telephone
{
    private ?string $number = null;

    private ?string $type = null;

    public function getNumber(): string
    {
        return $this->number;
    }

    public function setNumber(string $number): void
    {
        $this->number = $number;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }
}
