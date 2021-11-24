<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\Aggregate;

/**
 * Class Tax.
 */
class Tax
{
    private ?float $rate = null;

    /**
     * @return float
     */
    public function getRate()
    {
        return $this->rate;
    }

    public function setRate(float $rate): void
    {
        $this->rate = $rate;
    }
}
