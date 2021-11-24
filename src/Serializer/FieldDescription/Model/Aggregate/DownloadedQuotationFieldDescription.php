<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use QR\TeamleaderApiClient\Model\Aggregate\DownloadedQuotation;

/**
 * Class DownloadedQuotationFieldDescription.
 */
class DownloadedQuotationFieldDescription extends DownloadedFieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\Aggregate\DownloadedQuotation>
     */
    public function getTargetClass()
    {
        return DownloadedQuotation::class;
    }
}
