<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Timer;

use QR\TeamleaderApiClient\Model\Timer\Timer;

/**
 * Class TimerFieldDescription.
 */
class TimerFieldDescription extends TimerFieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\Timer\Timer>
     */
    public function getTargetClass()
    {
        return Timer::class;
    }
}
