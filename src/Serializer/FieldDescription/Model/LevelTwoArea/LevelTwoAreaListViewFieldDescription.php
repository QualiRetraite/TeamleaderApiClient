<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\LevelTwoArea;

use QR\TeamleaderApiClient\Model\LevelTwoArea\LevelTwoAreaListView;

/**
 * Class LevelTwoAreaListViewFieldDescription.
 */
class LevelTwoAreaListViewFieldDescription extends LevelTwoAreaFieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\LevelTwoArea\LevelTwoAreaListView>
     */
    public function getTargetClass()
    {
        return LevelTwoAreaListView::class;
    }
}
