<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use QR\TeamleaderApiClient\Model\Aggregate\DownloadedInvoice;

/**
 * Class DownloadedInvoiceFieldDescription.
 */
class DownloadedInvoiceFieldDescription extends DownloadedFieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\Aggregate\DownloadedInvoice>
     */
    public function getTargetClass()
    {
        return DownloadedInvoice::class;
    }
}
