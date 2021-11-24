<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use QR\TeamleaderApiClient\Model\Aggregate\LinkedPhase;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedUser;
use QR\TeamleaderApiClient\Model\Aggregate\PhaseHistory;
use QR\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class PhaseHistoryFieldDescription.
 */
class PhaseHistoryFieldDescription extends FieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return array<string, array<string, class-string<\DateTime>|class-string<\QR\TeamleaderApiClient\Model\Aggregate\LinkedPhase>|class-string|<|\QR\TeamleaderApiClient\Model\Aggregate\LinkedUser>>>
     */
    protected function getFieldMapping(): array
    {
        return [
              'phase' => ['target_class' => LinkedPhase::class],
              'started_at' => ['target_class' => \DateTime::class],
              'started_by' => ['target_class' => LinkedUser::class],
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\Aggregate\PhaseHistory>
     */
    public function getTargetClass()
    {
        return PhaseHistory::class;
    }
}
