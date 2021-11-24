<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Product;

use QR\TeamleaderApiClient\Model\Aggregate\Translation;
use QR\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class ProductFieldDescriptionBase.
 */
abstract class ProductFieldDescriptionBase extends FieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return string[]|array<string, array<string, string>>
     */
    protected function getFieldMapping(): array
    {
        return [
            'id',
            'translations' => ['target_class' => Translation::class.'[]'],
            'external_id',
        ];
    }
}
