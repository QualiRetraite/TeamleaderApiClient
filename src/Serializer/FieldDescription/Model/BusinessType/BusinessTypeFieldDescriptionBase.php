<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\BusinessType;

use QR\TeamleaderApiClient\Model\BusinessType\BusinessTypeBase;
use QR\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class BusinessTypeFieldDescriptionBase.
 */
abstract class BusinessTypeFieldDescriptionBase extends FieldDescriptionBase
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
            'country',
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\BusinessType\BusinessTypeBase>
     */
    public function getTargetClass()
    {
        return BusinessTypeBase::class;
    }
}
