<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use QR\TeamleaderApiClient\Model\Aggregate\InvoiceeMinimal;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedCustomer;
use QR\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class InvoiceeMinimalFieldDescription.
 */
class InvoiceeMinimalFieldDescription extends FieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return string[]|array<string, array<string, class-string<\QR\TeamleaderApiClient\Model\Aggregate\LinkedCustomer>>>
     */
    protected function getFieldMapping(): array
    {
        return [
            'name',
            'vat_number',
            'customer' => ['target_class' => LinkedCustomer::class],
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\Aggregate\InvoiceeMinimal>
     */
    public function getTargetClass()
    {
        return InvoiceeMinimal::class;
    }
}
