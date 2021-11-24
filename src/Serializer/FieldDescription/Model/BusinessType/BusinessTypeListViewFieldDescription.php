<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\BusinessType;

use QR\TeamleaderApiClient\Model\BusinessType\BusinessTypeListView;

/**
 * Class BusinessTypeListViewFieldDescription.
 */
class BusinessTypeListViewFieldDescription extends BusinessTypeFieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\BusinessType\BusinessTypeListView>
     */
    public function getTargetClass()
    {
        return BusinessTypeListView::class;
    }
}
