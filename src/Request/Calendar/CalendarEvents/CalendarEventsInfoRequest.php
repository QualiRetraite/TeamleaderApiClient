<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\Calendar\CalendarEvents;

use QR\TeamleaderApiClient\Request\GetRequest;
use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class CalendarEventsInfoRequest.
 */
class CalendarEventsInfoRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * CalendarEventsInfoRequest constructor.
     *
     * @param string $id
     */
    public function __construct($id)
    {
        $this->body['id'] = $id;
    }

    /**
     * {@inheritdoc}
     */
    public function getEndpoint(): string
    {
        return 'events.info';
    }
}
