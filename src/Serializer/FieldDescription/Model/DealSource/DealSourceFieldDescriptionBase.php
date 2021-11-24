<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\DealSource;

use QR\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class DealSourceFieldDescriptionBase.
 */
abstract class DealSourceFieldDescriptionBase extends FieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return string[]
     */
    protected function getFieldMapping(): array
    {
        return [
            'id',
            'name',
        ];
    }
}
