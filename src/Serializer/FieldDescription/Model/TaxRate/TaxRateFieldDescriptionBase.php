<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\TaxRate;

use QR\TeamleaderApiClient\Model\Aggregate\LinkedDepartment;
use QR\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class TaxRateFieldDescriptionBase.
 */
abstract class TaxRateFieldDescriptionBase extends FieldDescriptionBase
{
    /**
     * {@inheritdoc}
     */
    protected function getFieldMapping(): array
    {
        return [
            'id',
            'description',
            'rate',
            'department' => ['target_class' => LinkedDepartment::class],
        ];
    }
}
