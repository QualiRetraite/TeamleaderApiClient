<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\TimeTracking\Timers;

use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;
use QR\TeamleaderApiClient\Request\PostRequest;

/**
 * Class TimersStopRequest.
 */
class TimersStopRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * TimersStopRequest constructor.
     *
     * @param string|null $endedAt
     */
    public function __construct($endedAt = null)
    {
        if (null != $endedAt) {
            $this->body['ended_at'] = $endedAt;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getEndpoint(): string
    {
        return 'timers.stop';
    }
}
