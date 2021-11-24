<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\Aggregate;

/**
 * Class LineItem.
 */
class LineItem
{
    private ?\QR\TeamleaderApiClient\Model\Aggregate\Tax $tax = null;

    private ?\QR\TeamleaderApiClient\Model\Aggregate\CalculatedTotal $total = null;

    /**
     * LineItem constructor.
     *
     * @param int|null    $quantity
     * @param string|null $description
     * @param string|null $extendedDescription
     * @param string|null $taxRateId
     * @param string|null $withholdingTaxRateId
     */
    public function __construct(private $quantity = null, private $description = null, private $extendedDescription = null, private UnitPrice $unitPrice = null, private $taxRateId = null, private $withholdingTaxRateId = null, private Discount $discount = null, private LinkedProduct $product = null, private LinkedProductCategory $productCategory = null)
    {
    }

    public function getTaxRateId(): string
    {
        return $this->taxRateId;
    }

    public function setTaxRateId(string $taxRateId): void
    {
        $this->taxRateId = $taxRateId;
    }

    public function getWithholdingTaxRateId(): string
    {
        return $this->withholdingTaxRateId;
    }

    public function setWithholdingTaxRateId(string $withholdingTaxRateId): void
    {
        $this->withholdingTaxRateId = $withholdingTaxRateId;
    }

    public function getProduct(): LinkedProduct
    {
        return $this->product;
    }

    public function setProduct(LinkedProduct $product): void
    {
        $this->product = $product;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getExtendedDescription(): string
    {
        return $this->extendedDescription;
    }

    public function setExtendedDescription(string $extendedDescription): void
    {
        $this->extendedDescription = $extendedDescription;
    }

    public function getUnitPrice(): UnitPrice
    {
        return $this->unitPrice;
    }

    public function setUnitPrice(UnitPrice $unitPrice): void
    {
        $this->unitPrice = $unitPrice;
    }

    public function getTax(): Tax
    {
        return $this->tax;
    }

    public function setTax(Tax $tax): void
    {
        $this->tax = $tax;
    }

    public function getDiscount(): Discount
    {
        return $this->discount;
    }

    public function setDiscount(Discount $discount): void
    {
        $this->discount = $discount;
    }

    public function getTotal(): CalculatedTotal
    {
        return $this->total;
    }

    public function setTotal(CalculatedTotal $total): void
    {
        $this->total = $total;
    }

    public function getProductCategory(): LinkedProductCategory
    {
        return $this->productCategory;
    }

    public function setProductCategory(LinkedProductCategory $productCategory): void
    {
        $this->productCategory = $productCategory;
    }
}
