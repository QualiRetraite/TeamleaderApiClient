<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\TimeTracking\Timers;

use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;
use QR\TeamleaderApiClient\Request\PostRequest;

/**
 * Class TimersStartRequest.
 */
class TimersStartRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * TimersStartRequest constructor.
     *
     * @param mixed[] $timer
     */
    public function __construct(array $timer)
    {
        $this->body = $timer;
    }

    /**
     * {@inheritdoc}
     */
    public function getEndpoint(): string
    {
        return 'timers.start';
    }
}
