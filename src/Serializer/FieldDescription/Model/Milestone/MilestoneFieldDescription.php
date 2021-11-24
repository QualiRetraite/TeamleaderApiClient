<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Milestone;

use QR\TeamleaderApiClient\Model\Milestone\Milestone;

/**
 * Class MilestoneFieldDescription.
 */
class MilestoneFieldDescription extends MilestoneFieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\Milestone\Milestone>
     */
    public function getTargetClass()
    {
        return Milestone::class;
    }
}
