<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use QR\TeamleaderApiClient\Model\Aggregate\InvoiceeExtended;

/**
 * Class InvoiceeExtendedFieldDescription.
 */
class InvoiceeExtendedFieldDescription extends InvoiceeFieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return mixed[]
     */
    protected function getFieldMapping(): array
    {
        return array_merge(
            parent::getFieldMapping(),
            [
                'email',
                'national_identification_number',
            ]
        );
    }

    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\Aggregate\InvoiceeExtended>
     */
    public function getTargetClass()
    {
        return InvoiceeExtended::class;
    }
}
