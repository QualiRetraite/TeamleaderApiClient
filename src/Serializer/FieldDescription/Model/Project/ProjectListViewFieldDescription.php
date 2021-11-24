<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Project;

use QR\TeamleaderApiClient\Model\Project\ProjectListView;

/**
 * Class ProjectListViewFieldDescription.
 */
class ProjectListViewFieldDescription extends ProjectFieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\Project\ProjectListView>
     */
    public function getTargetClass()
    {
        return ProjectListView::class;
    }
}
