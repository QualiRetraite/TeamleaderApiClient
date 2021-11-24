<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\ActivityType;

use QR\TeamleaderApiClient\Model\ActivityType\ActivityTypeListView;

/**
 * Class ActivityTypeListViewFieldDescription.
 */
class ActivityTypeListViewFieldDescription extends ActivityTypeFieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\ActivityType\ActivityTypeListView>
     */
    public function getTargetClass()
    {
        return ActivityTypeListView::class;
    }
}
