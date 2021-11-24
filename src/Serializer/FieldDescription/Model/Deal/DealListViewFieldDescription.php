<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Deal;

use QR\TeamleaderApiClient\Model\Aggregate\LinkedPhase;
use QR\TeamleaderApiClient\Model\Deal\DealListView;

/**
 * Class DealListViewFieldDescription.
 */
class DealListViewFieldDescription extends DealFieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return mixed[]
     */
    protected function getFieldMapping(): array
    {
        $fields = [
            'current_phase' => ['target_class' => LinkedPhase::class],
        ];

        return array_merge(
            parent::getFieldMapping(),
            $fields
        );
    }

    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\Deal\DealListView>
     */
    public function getTargetClass()
    {
        return DealListView::class;
    }
}
