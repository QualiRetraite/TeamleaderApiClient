<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\Aggregate;

/**
 * Class DiscountWithDescription.
 */
class DiscountWithDescription extends Discount
{
    public function __construct($value = null, $type = null, private $description = null)
    {
        parent::__construct($value, $type);
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
}
