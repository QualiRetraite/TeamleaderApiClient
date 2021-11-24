<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\TimeTracking;

use QR\TeamleaderApiClient\Model\Aggregate\LinkedSubject;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedUser;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedWorkType;
use QR\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class TimeTrackingFieldDescriptionBase.
 */
abstract class TimeTrackingFieldDescriptionBase extends FieldDescriptionBase
{
    /**
     * {@inheritdoc}
     */
    protected function getFieldMapping()
    {
        return [
            'id',
            'user' => ['target_class' => LinkedUser::class],
            'work_type' => ['target_class' => LinkedWorkType::class],
            'started_on',
            'started_at' => ['target_class' => \DateTime::class],
            'ended_at' => ['target_class' => \DateTime::class],
            'duration',
            'description',
            'subject' => ['target_class' => LinkedSubject::class],
            'invoiceable',
        ];
    }
}
