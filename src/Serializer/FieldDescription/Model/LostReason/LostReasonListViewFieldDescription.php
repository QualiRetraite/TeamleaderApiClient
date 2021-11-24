<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\LostReason;

use QR\TeamleaderApiClient\Model\LostReason\LostReasonListView;

/**
 * Class LostReasonListViewFieldDescription.
 */
class LostReasonListViewFieldDescription extends LostReasonFieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\LostReason\LostReasonListView>
     */
    public function getTargetClass()
    {
        return LostReasonListView::class;
    }
}
