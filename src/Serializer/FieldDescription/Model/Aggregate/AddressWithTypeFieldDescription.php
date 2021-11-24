<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use QR\TeamleaderApiClient\Model\Aggregate\Address;
use QR\TeamleaderApiClient\Model\Aggregate\AddressWithType;
use QR\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class AddressWithTypeFieldDescription.
 */
class AddressWithTypeFieldDescription extends FieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return string[]|array<string, array<string, class-string<\QR\TeamleaderApiClient\Model\Aggregate\Address>>>
     */
    protected function getFieldMapping(): array
    {
        return [
            'type',
            'address' => ['target_class' => Address::class],
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\Aggregate\AddressWithType>
     */
    public function getTargetClass()
    {
        return AddressWithType::class;
    }
}
