<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\TimeTracking\Timers;

use QR\TeamleaderApiClient\Request\GetRequest;
use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class TimersCurrentRequest.
 */
class TimersCurrentRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * {@inheritdoc}
     */
    public function getEndpoint(): string
    {
        return 'timers.current';
    }
}
