<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Milestone;

use QR\TeamleaderApiClient\Model\Aggregate\LinkedProject;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedUser;
use QR\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class MilestoneFieldDescriptionBase.
 */
abstract class MilestoneFieldDescriptionBase extends FieldDescriptionBase
{
    /**
     * {@inheritdoc}
     */
    protected function getFieldMapping()
    {
        return [
            'id',
            'project' => ['target_class' => LinkedProject::class],
            'due_on',
            'name',
            'responsible_user' => ['target_class' => LinkedUser::class],
            'status',
        ];
    }
}
