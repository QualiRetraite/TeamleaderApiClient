<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use QR\TeamleaderApiClient\Model\Aggregate\PaymentAmount;
use QR\TeamleaderApiClient\Model\Aggregate\CalculatedTotal;
use QR\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class CalculatedTotalFieldDescription.
 */
class CalculatedTotalFieldDescription extends FieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return array<string, array<string, class-string<\QR\TeamleaderApiClient\Model\Aggregate\PaymentAmount>>>
     */
    protected function getFieldMapping(): array
    {
        return [
            'tax_exclusive' => ['target_class' => PaymentAmount::class],
            'tax_exclusive_before_discount' => ['target_class' => PaymentAmount::class],
            'tax_inclusive' => ['target_class' => PaymentAmount::class],
            'tax_inclusive_before_discount' => ['target_class' => PaymentAmount::class],
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\Aggregate\CalculatedTotal>
     */
    public function getTargetClass()
    {
        return CalculatedTotal::class;
    }
}
