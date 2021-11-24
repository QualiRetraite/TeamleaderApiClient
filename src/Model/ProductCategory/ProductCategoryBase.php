<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\ProductCategory;

use QR\TeamleaderApiClient\Model\Aggregate\Ledger;
use QR\TeamleaderApiClient\Model\ModelBase;

/**
 * Class ProductCategoryBase.
 */
abstract class ProductCategoryBase extends ModelBase
{
    private ?string $name = null;

    /**
     * @var Ledger[]
     */
    private ?array $ledgers = null;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return Ledger[]
     */
    public function getLedgers(): array
    {
        return $this->ledgers;
    }

    /**
     * @param Ledger[] $ledgers
     */
    public function setLedgers(array $ledgers): void
    {
        $this->ledgers = $ledgers;
    }
}
