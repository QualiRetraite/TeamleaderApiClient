<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\Aggregate;

/**
 * Class Discount.
 */
class Discount
{
    /**
     * Discount constructor.
     *
     * @param string|null $value
     * @param string|null $type
     */
    public function __construct(private $value = null, private $type = null)
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

    public function getValue(): float
    {
        return $this->value;
    }

    public function setValue(float $value): void
    {
        $this->value = $value;
    }
}
