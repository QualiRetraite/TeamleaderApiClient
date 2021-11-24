<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\User;

use QR\TeamleaderApiClient\Model\Aggregate\Account;
use QR\TeamleaderApiClient\Model\Aggregate\Telephone;
use QR\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class UserFieldDescriptionBase.
 */
abstract class UserFieldDescriptionBase extends FieldDescriptionBase
{
    /**
     * {@inheritdoc}
     */
    protected function getFieldMapping()
    {
        return [
            'id',
            'account' => ['target_class' => Account::class],
            'first_name',
            'last_name',
            'email',
            'language',
            'telephones' => ['target_class' => Telephone::class.'[]'],
            'function',
        ];
    }
}
