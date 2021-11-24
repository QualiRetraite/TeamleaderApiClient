<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Project;

use QR\TeamleaderApiClient\Model\Aggregate\LinkedMileStone;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedParticipantWithRole;
use QR\TeamleaderApiClient\Model\Project\Project;

/**
 * Class ProjectFieldDescription.
 */
class ProjectFieldDescription extends ProjectFieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return mixed[]
     */
    protected function getFieldMapping(): array
    {
        $fields = [
            'milestones' => ['target_class' => LinkedMileStone::class.'[]'],
            'participants' => ['target_class' => LinkedParticipantWithRole::class.'[]'],
        ];

        return array_merge(
            parent::getFieldMapping(),
            $fields
        );
    }

    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\Project\Project>
     */
    public function getTargetClass()
    {
        return Project::class;
    }
}
