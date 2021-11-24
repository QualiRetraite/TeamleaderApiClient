<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\TimeTracking;

use QR\TeamleaderApiClient\Model\TimeTracking\TimeTracking;

/**
 * Class TimeTrackingFieldDescription.
 */
class TimeTrackingFieldDescription extends TimeTrackingFieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\TimeTracking\TimeTracking>
     */
    public function getTargetClass()
    {
        return TimeTracking::class;
    }
}
