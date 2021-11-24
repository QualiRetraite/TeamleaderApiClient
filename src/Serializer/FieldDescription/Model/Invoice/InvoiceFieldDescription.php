<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Invoice;

use QR\TeamleaderApiClient\Model\Aggregate\DiscountWithDescription;
use QR\TeamleaderApiClient\Model\Aggregate\GroupedLine;
use QR\TeamleaderApiClient\Model\Aggregate\InvoiceeExtended;
use QR\TeamleaderApiClient\Model\Aggregate\PaymentTerm;
use QR\TeamleaderApiClient\Model\Aggregate\PaymentWithDate;
use QR\TeamleaderApiClient\Model\Invoice\Invoice;

/**
 * Class InvoiceFieldDescription.
 */
class InvoiceFieldDescription extends InvoiceFieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return mixed[]
     */
    protected function getFieldMapping(): array
    {
        $fields = [
            'invoicee' => ['target_class' => InvoiceeExtended::class],
            'discounts' => ['target_class' => DiscountWithDescription::class.'[]'],
            'grouped_lines' => ['target_class' => GroupedLine::class.'[]'],
            'payment_term' => ['target_class' => PaymentTerm::class],
            'payments' => ['target_class' => PaymentWithDate::class.'[]'],
            'payment_reference',
            'note',
        ];

        return array_merge(
            parent::getFieldMapping(),
            $fields
        );
    }

    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\Invoice\Invoice>
     */
    public function getTargetClass()
    {
        return Invoice::class;
    }
}
