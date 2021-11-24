<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\WorkOrder;

use QR\TeamleaderApiClient\Model\WorkOrder\WorkOrder;

/**
 * Class WorkOrderFieldDescription.
 */
class WorkOrderFieldDescription extends WorkOrderFieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\WorkOrder\WorkOrder>
     */
    public function getTargetClass()
    {
        return WorkOrder::class;
    }
}
