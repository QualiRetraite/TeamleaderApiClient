<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Milestone;

use QR\TeamleaderApiClient\Model\Milestone\MilestoneListView;

/**
 * Class MilestoneListViewFieldDescription.
 */
class MilestoneListViewFieldDescription extends MilestoneFieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\Milestone\MilestoneListView>
     */
    public function getTargetClass()
    {
        return MilestoneListView::class;
    }
}
