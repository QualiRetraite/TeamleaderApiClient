<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Invoice;

use QR\TeamleaderApiClient\Model\Aggregate\LinkedDepartment;
use QR\TeamleaderApiClient\Model\Aggregate\TotalWithDue;
use QR\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class InvoiceFieldDescriptionBase.
 */
abstract class InvoiceFieldDescriptionBase extends FieldDescriptionBase
{
    /**
     * {@inheritdoc}
     */
    protected function getFieldMapping()
    {
        return [
            'id',
            'department' => ['target_class' => LinkedDepartment::class],
            'invoice_number',
            'invoice_date',
            'status',
            'due_on',
            'paid',
            'paid_at' => ['target_class' => \DateTime::class],
            'total' => ['target_class' => TotalWithDue::class],
            'created_at' => ['target_class' => \DateTime::class],
            'updated_at' => ['target_class' => \DateTime::class],
        ];
    }
}
