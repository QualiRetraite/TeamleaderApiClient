<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Tag;

use QR\TeamleaderApiClient\Model\Tag\TagListView;

/**
 * Class TagListViewFieldDescription.
 */
class TagListViewFieldDescription extends TagFieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\Tag\TagListView>
     */
    public function getTargetClass()
    {
        return TagListView::class;
    }
}
