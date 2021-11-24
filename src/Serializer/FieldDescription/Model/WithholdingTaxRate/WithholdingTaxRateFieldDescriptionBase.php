<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\WithholdingTaxRate;

use QR\TeamleaderApiClient\Model\Aggregate\LinkedDepartment;
use QR\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class WithholdingTaxRateFieldDescriptionBase.
 */
abstract class WithholdingTaxRateFieldDescriptionBase extends FieldDescriptionBase
{
    /**
     * {@inheritdoc}
     */
    protected function getFieldMapping(): array
    {
        return [
            'id',
            'department' => ['target_class' => LinkedDepartment::class],
            'description',
            'rate',
        ];
    }
}
