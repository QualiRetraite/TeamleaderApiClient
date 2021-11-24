<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\ProductCategory;

use QR\TeamleaderApiClient\Model\Aggregate\Ledger;
use QR\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class ProductCategoryFieldDescriptionBase.
 */
abstract class ProductCategoryFieldDescriptionBase extends FieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return string[]|array<string, array<string, string>>
     */
    protected function getFieldMapping(): array
    {
        return [
            'name',
            'ledgers' => ['target_class' => Ledger::class.'[]'],
        ];
    }
}
