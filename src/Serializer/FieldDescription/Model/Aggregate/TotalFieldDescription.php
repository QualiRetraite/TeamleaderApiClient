<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use QR\TeamleaderApiClient\Model\Aggregate\InvoiceTax;
use QR\TeamleaderApiClient\Model\Aggregate\PaymentAmount;
use QR\TeamleaderApiClient\Model\Aggregate\Total;
use QR\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class TotalFieldDescription.
 */
class TotalFieldDescription extends FieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return array<string, array<string, string|class-string<\QR\TeamleaderApiClient\Model\Aggregate\PaymentAmount>>>
     */
    protected function getFieldMapping(): array
    {
        return [
            'tax_exclusive' => ['target_class' => PaymentAmount::class],
            'tax_inclusive' => ['target_class' => PaymentAmount::class],
            'payable' => ['target_class' => PaymentAmount::class],
            'taxes' => ['target_class' => InvoiceTax::class.'[]'],
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\Aggregate\Total>
     */
    public function getTargetClass()
    {
        return Total::class;
    }
}
