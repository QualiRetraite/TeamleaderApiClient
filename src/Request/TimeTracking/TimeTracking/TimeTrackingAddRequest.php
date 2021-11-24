<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\TimeTracking\TimeTracking;

use QR\TeamleaderApiClient\Request\PostRequest;

/**
 * Class TimeTrackingAddRequest.
 */
class TimeTrackingAddRequest extends PostRequest
{
    /**
     * TimeTrackingAddRequest constructor.
     *
     * @param mixed[] $timeTracking
     */
    public function __construct(array $timeTracking)
    {
        if (
            isset($timeTracking['work_type']) &&
            ($id = $timeTracking['work_type']['id']) != null
        ) {
            $timeTracking['work_type_id'] = $id;
        }

        unset(
            $timeTracking['work_type']
        );

        $this->body = $timeTracking;
    }

    /**
     * {@inheritdoc}
     */
    public function getEndpoint(): string
    {
        return 'timeTracking.add';
    }
}
