<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\CreditNote;

use QR\TeamleaderApiClient\Model\Aggregate\InvoiceeMinimal;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedDepartment;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedInvoice;
use QR\TeamleaderApiClient\Model\Aggregate\Total;
use QR\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class CreditNoteFieldDescriptionBase.
 */
abstract class CreditNoteFieldDescriptionBase extends FieldDescriptionBase
{
    /**
     * {@inheritdoc}
     */
    protected function getFieldMapping(): array
    {
        return [
            'id',
            'department' => ['target_class' => LinkedDepartment::class],
            'credit_note_number',
            'credit_note_date',
            'status',
            'invoice' => ['target_class' => LinkedInvoice::class],
            'paid',
            'paid_at',
            'invoicee' => ['target_class' => InvoiceeMinimal::class],
            'total' => ['target_class' => Total::class],
            'created_at' => ['target_class' => \DateTime::class],
            'updated_at' => ['target_class' => \DateTime::class],
        ];
    }
}
