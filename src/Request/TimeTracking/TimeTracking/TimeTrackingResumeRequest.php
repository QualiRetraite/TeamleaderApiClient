<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\TimeTracking\TimeTracking;

use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;
use QR\TeamleaderApiClient\Request\PostRequest;

/**
 * Class TimeTrackingResumeRequest.
 */
class TimeTrackingResumeRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * TimeTrackingResumeRequest constructor.
     *
     * @param string      $id
     * @param string|null $startedAt
     */
    public function __construct($id, $startedAt = null)
    {
        $this->body['id'] = $id;

        if (null != $startedAt) {
            $this->body['started_at'] = $startedAt;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getEndpoint(): string
    {
        return 'timeTracking.resume';
    }
}
