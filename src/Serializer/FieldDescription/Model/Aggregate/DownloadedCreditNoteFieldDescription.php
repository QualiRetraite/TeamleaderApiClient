<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use QR\TeamleaderApiClient\Model\Aggregate\DownloadedCreditNote;

/**
 * Class DownloadedCreditNoteFieldDescription.
 */
class DownloadedCreditNoteFieldDescription extends DownloadedFieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\Aggregate\DownloadedCreditNote>
     */
    public function getTargetClass()
    {
        return DownloadedCreditNote::class;
    }
}
