<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\TimeTracking;

use QR\TeamleaderApiClient\Model\TimeTracking\TimeTrackingListView;

/**
 * Class TimeTrackingListViewFieldDescription.
 */
class TimeTrackingListViewFieldDescription extends TimeTrackingFieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\TimeTracking\TimeTrackingListView>
     */
    public function getTargetClass()
    {
        return TimeTrackingListView::class;
    }
}
