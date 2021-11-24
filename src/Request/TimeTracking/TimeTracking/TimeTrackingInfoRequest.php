<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\TimeTracking\TimeTracking;

use QR\TeamleaderApiClient\Request\GetRequest;
use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class TimeTrackingInfoRequest.
 */
class TimeTrackingInfoRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * TimeTrackingInfoRequest constructor.
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
        return 'timeTracking.info';
    }
}
