<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Repository;

use DateTime;
use Http\Client\Exception;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedTimer;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedTimeTracking;
use QR\TeamleaderApiClient\Model\Timer\Timer;
use QR\TeamleaderApiClient\Request\TimeTracking\Timers\TimersCurrentRequest;
use QR\TeamleaderApiClient\Request\TimeTracking\Timers\TimersStartRequest;
use QR\TeamleaderApiClient\Request\TimeTracking\Timers\TimersStopRequest;
use QR\TeamleaderApiClient\Request\TimeTracking\Timers\TimersUpdateRequest;

/**
 * Class TimerRepository.
 */
class TimerRepository extends RepositoryBase
{
    /**
     * @throws Exception
     */
    public function currentTimer(): Timer
    {
        $request = new TimersCurrentRequest();

        return $this->handleRequest(
            $request,
            Timer::class
        );
    }

    /**
     * @throws Exception
     */
    public function startTimer(Timer $timer): LinkedTimer
    {
        $request = new TimersStartRequest($this->normalize($timer));

        return $this->handleRequest(
            $request,
            LinkedTimer::class
        );
    }

    /**
     * @throws Exception
     */
    public function stopTimer(DateTime $endedAt = null): LinkedTimeTracking
    {
        $request = new TimersStopRequest($this->normalize($endedAt));

        return $this->handleRequest(
            $request,
            LinkedTimeTracking::class
        );
    }

    /**
     * @throws Exception
     */
    public function updateTimer(Timer $timer): void
    {
        $request = new TimersUpdateRequest($this->normalize($timer));

        $this->apiClient->handle($request);
    }
}
