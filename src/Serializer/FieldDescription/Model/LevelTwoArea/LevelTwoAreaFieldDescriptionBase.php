<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\LevelTwoArea;

use QR\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class LevelTwoAreaFieldDescriptionBase.
 */
abstract class LevelTwoAreaFieldDescriptionBase extends FieldDescriptionBase
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
            'country',
            'name',
        ];
    }
}
