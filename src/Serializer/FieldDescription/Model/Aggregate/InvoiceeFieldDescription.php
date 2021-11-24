<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use QR\TeamleaderApiClient\Model\Aggregate\Invoicee;

/**
 * Class InvoiceeFieldDescription.
 */
class InvoiceeFieldDescription extends InvoiceeFieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\Aggregate\Invoicee>
     */
    public function getTargetClass()
    {
        return Invoicee::class;
    }
}
