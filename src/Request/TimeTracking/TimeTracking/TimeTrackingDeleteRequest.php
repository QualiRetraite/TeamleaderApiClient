<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\TimeTracking\TimeTracking;

use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;
use QR\TeamleaderApiClient\Request\PostRequest;

/**
 * Class TimeTrackingDeleteRequest.
 */
class TimeTrackingDeleteRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * TimeTrackingDeleteRequest constructor.
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
        return 'timeTracking.delete';
    }
}
