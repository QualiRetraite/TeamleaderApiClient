<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Calendar;

use QR\TeamleaderApiClient\Model\CalendarEvents\CalendarEvent;

/**
 * Class CalendarEventFieldDefinition.
 */
class CalendarEventFieldDefinition extends CalendarEventFieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\CalendarEvents\CalendarEvent>
     */
    public function getTargetClass()
    {
        return CalendarEvent::class;
    }
}
