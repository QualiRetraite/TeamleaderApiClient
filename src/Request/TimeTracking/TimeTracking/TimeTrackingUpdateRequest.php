<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\TimeTracking\TimeTracking;

use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;
use QR\TeamleaderApiClient\Request\PostRequest;

/**
 * Class TimeTrackingUpdateRequest.
 */
class TimeTrackingUpdateRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * TimeTrackingUpdateRequest constructor.
     *
     * @param mixed[] $timeTracking
     */
    public function __construct(array $timeTracking)
    {
        $this->body = $timeTracking;
    }

    /**
     * {@inheritdoc}
     */
    public function getEndpoint(): string
    {
        return 'timeTracking.update';
    }
}
