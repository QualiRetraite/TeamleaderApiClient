<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\Calendar\CalendarEvents;

use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;
use QR\TeamleaderApiClient\Request\PostRequest;

/**
 * Class CalendarEventsCancelRequest.
 */
class CalendarEventsCancelRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * CalendarEventsCancelRequest constructor.
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
        return 'events.cancel';
    }
}
