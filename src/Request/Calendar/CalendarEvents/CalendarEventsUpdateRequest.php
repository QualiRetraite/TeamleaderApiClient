<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\Calendar\CalendarEvents;

use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;
use QR\TeamleaderApiClient\Request\PostRequest;

/**
 * Class CalendarEventsUpdateRequest.
 */
class CalendarEventsUpdateRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * CalendarEventsUpdateRequest constructor.
     *
     * @param mixed[] $calendarEvent
     */
    public function __construct(array $calendarEvent)
    {
        $activityType = $calendarEvent['activity_type'];
        $calendarEvent['activity_type_id'] = $activityType['id'];

        unset(
            $calendarEvent['activity_type'],
            $calendarEvent['creator'],
            $calendarEvent['todo']
        );

        unset($calendarEvent['attendees']); // TODO Bug in Teamleader - "attendees must have a length lower than 0"
        unset($calendarEvent['location']); // TODO Bug in Teamleader - “location must be null"

        $this->body = $calendarEvent;
    }

    /**
     * {@inheritdoc}
     */
    public function getEndpoint(): string
    {
        return 'events.update';
    }
}
