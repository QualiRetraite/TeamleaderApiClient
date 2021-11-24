<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\User;

use QR\TeamleaderApiClient\Model\User\User;

/**
 * Class UserFieldDescription.
 */
class UserFieldDescription extends UserFieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return mixed[]
     */
    protected function getFieldMapping(): array
    {
        $fields = [
            'time_zone',
        ];

        return array_merge(
            parent::getFieldMapping(),
            $fields
        );
    }

    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\User\User>
     */
    public function getTargetClass()
    {
        return User::class;
    }
}
