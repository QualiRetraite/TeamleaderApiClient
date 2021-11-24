<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\DealSource;

use QR\TeamleaderApiClient\Model\DealSource\DealSourceListView;

/**
 * Class DealSourceListViewFieldDescription.
 */
class DealSourceListViewFieldDescription extends DealSourceFieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\DealSource\DealSourceListView>
     */
    public function getTargetClass()
    {
        return DealSourceListView::class;
    }
}
