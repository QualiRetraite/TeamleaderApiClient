<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\WorkType;

use QR\TeamleaderApiClient\Model\WorkType\WorkTypeListView;

/**
 * Class WorkTypeListViewFieldDescription.
 */
class WorkTypeListViewFieldDescription extends WorkTypeFieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\WorkType\WorkTypeListView>
     */
    public function getTargetClass()
    {
        return WorkTypeListView::class;
    }
}
