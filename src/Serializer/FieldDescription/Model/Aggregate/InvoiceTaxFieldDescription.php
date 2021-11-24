<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use QR\TeamleaderApiClient\Model\Aggregate\InvoiceTax;
use QR\TeamleaderApiClient\Model\Aggregate\PaymentAmount;
use QR\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class InvoiceTaxFieldDescription.
 */
class InvoiceTaxFieldDescription extends FieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return string[]|array<string, array<string, class-string<\QR\TeamleaderApiClient\Model\Aggregate\PaymentAmount>>>
     */
    protected function getFieldMapping(): array
    {
        return [
            'rate',
            'taxable' => ['target_class' => PaymentAmount::class],
            'tax' => ['target_class' => PaymentAmount::class],
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\Aggregate\InvoiceTax>
     */
    public function getTargetClass()
    {
        return InvoiceTax::class;
    }
}
