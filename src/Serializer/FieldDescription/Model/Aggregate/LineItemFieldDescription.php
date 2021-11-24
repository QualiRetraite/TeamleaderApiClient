<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use QR\TeamleaderApiClient\Model\Aggregate\Discount;
use QR\TeamleaderApiClient\Model\Aggregate\LineItem;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedProduct;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedProductCategory;
use QR\TeamleaderApiClient\Model\Aggregate\Tax;
use QR\TeamleaderApiClient\Model\Aggregate\CalculatedTotal;
use QR\TeamleaderApiClient\Model\Aggregate\UnitPrice;
use QR\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class LineItemFieldDescription.
 */
class LineItemFieldDescription extends FieldDescriptionBase
{
    /**
     * {@inheritdoc}
     */
    protected function getFieldMapping(): array
    {
        return [
            'product' => ['target_class' => LinkedProduct::class],
            'product_category' => ['target_class' => LinkedProductCategory::class],
            'quantity',
            'description',
            'extended_description',
            'unit_price' => ['target_class' => UnitPrice::class],
            'tax' => ['target_class' => Tax::class],
            'tax_rate_id',
            'withholding_tax_rate_id',
            'discount' => ['target_class' => Discount::class],
            'total' => ['target_class' => CalculatedTotal::class],
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\Aggregate\LineItem>
     */
    public function getTargetClass()
    {
        return LineItem::class;
    }
}
