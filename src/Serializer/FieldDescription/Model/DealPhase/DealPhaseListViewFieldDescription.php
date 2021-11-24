<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\DealPhase;

use QR\TeamleaderApiClient\Model\DealPhase\DealPhaseListView;

/**
 * Class DealPhaseListViewFieldDescription.
 */
class DealPhaseListViewFieldDescription extends DealPhaseFieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\DealPhase\DealPhaseListView>
     */
    public function getTargetClass()
    {
        return DealPhaseListView::class;
    }
}
