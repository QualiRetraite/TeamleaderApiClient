<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\TimeTracking\Timers;

use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;
use QR\TeamleaderApiClient\Request\PostRequest;

/**
 * Class TimersUpdateRequest.
 */
class TimersUpdateRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * TimersUpdateRequest constructor.
     *
     * @param mixed[] $timer
     */
    public function __construct(array $timer)
    {
        if (
            isset($timer['work_type']) &&
            ($id = $timer['work_type']['id']) != null
        ) {
            $timer['work_type_id'] = $id;
        }

        unset(
            $timer['id'],
            $timer['user'],
            $timer['invoiceable'],
            $timer['work_type'],
            $timer['started_at']
        );

        $this->body = $timer;
    }

    /**
     * {@inheritdoc}
     */
    public function getEndpoint(): string
    {
        return 'timers.update';
    }
}
