<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use QR\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class DownloadedFieldDescriptionBase.
 */
abstract class DownloadedFieldDescriptionBase extends FieldDescriptionBase
{
    /**
     * {@inheritdoc}
     */
    protected function getFieldMapping(): array
    {
        return [
            'location',
            'expires' => ['target_class' => \DateTime::class],
        ];
    }
}
