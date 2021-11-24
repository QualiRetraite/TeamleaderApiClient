<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use QR\TeamleaderApiClient\Model\Aggregate\LinkedParticipant;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedParticipantWithRole;
use QR\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class LinkedParticipantWithRoleFieldDescription.
 */
class LinkedParticipantWithRoleFieldDescription extends FieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return string[]|array<string, array<string, class-string<\QR\TeamleaderApiClient\Model\Aggregate\LinkedParticipant>>>
     */
    protected function getFieldMapping(): array
    {
        return [
            'participant' => ['target_class' => LinkedParticipant::class],
            'role',
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\Aggregate\LinkedParticipantWithRole>
     */
    public function getTargetClass()
    {
        return LinkedParticipantWithRole::class;
    }
}
