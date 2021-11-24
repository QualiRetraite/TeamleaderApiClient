<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Timer;

use QR\TeamleaderApiClient\Model\Aggregate\Account;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedSubject;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedWorkType;
use QR\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class TimerFieldDescriptionBase.
 */
abstract class TimerFieldDescriptionBase extends FieldDescriptionBase
{
    /**
     * {@inheritdoc}
     */
    protected function getFieldMapping()
    {
        return [
            'id',
            'user' => ['target_class' => Account::class],
            'work_type' => ['target_class' => LinkedWorkType::class],
            'started_at' => ['target_class' => \DateTime::class],
            'description',
            'subject' => ['target_class' => LinkedSubject::class],
            'invoiceable',
        ];
    }
}
