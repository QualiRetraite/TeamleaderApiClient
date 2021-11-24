<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\WorkOrder;

use DateTime;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedCustomer;
use QR\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class WorkOrderFieldDescriptionBase.
 */
abstract class WorkOrderFieldDescriptionBase extends FieldDescriptionBase
{
    /**
     * {@inheritdoc}
     */
    protected function getFieldMapping()
    {
        return [
            'customer' => ['target_class' => LinkedCustomer::class],
            'starts_at' => ['target_class' => DateTime::class],
            'description',
            'department_id',
            'milestone_id',
            'event_id',
        ];
    }
}
