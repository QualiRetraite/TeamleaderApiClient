<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Department;

use QR\TeamleaderApiClient\Model\Department\DepartmentListView;

/**
 * Class DepartmentListViewFieldDescription.
 */
class DepartmentListViewFieldDescription extends DepartmentFieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\Department\DepartmentListView>
     */
    public function getTargetClass()
    {
        return DepartmentListView::class;
    }
}
