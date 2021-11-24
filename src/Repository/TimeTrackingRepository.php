<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Repository;

use QR\TeamleaderApiClient\Model\Aggregate\LinkedTimer;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedTimeTracking;
use QR\TeamleaderApiClient\Model\TimeTracking\TimeTracking;
use QR\TeamleaderApiClient\Model\TimeTracking\TimeTrackingListView;
use QR\TeamleaderApiClient\Request\TimeTracking\TimeTracking\TimeTrackingAddRequest;
use QR\TeamleaderApiClient\Request\TimeTracking\TimeTracking\TimeTrackingDeleteRequest;
use QR\TeamleaderApiClient\Request\TimeTracking\TimeTracking\TimeTrackingInfoRequest;
use QR\TeamleaderApiClient\Request\TimeTracking\TimeTracking\TimeTrackingListRequest;
use QR\TeamleaderApiClient\Request\TimeTracking\TimeTracking\TimeTrackingResumeRequest;
use QR\TeamleaderApiClient\Request\TimeTracking\TimeTracking\TimeTrackingUpdateRequest;

/**
 * Class TimeTrackingRepository.
 */
class TimeTrackingRepository extends RepositoryBase
{
    /**
     * @return TimeTrackingListView[]
     *
     * @throws \Http\Client\Exception
     */
    public function listTimeTracking(array $filters = [], array $page = [], array $sort = []): array
    {
        $request = new TimeTrackingListRequest();
        $request->setFilters($filters);
        $request->setPage($page);
        $request->setSort($sort);

        return $this->handleRequest(
            $request,
            TimeTrackingListView::class.'[]'
        );
    }

    /**
     * @throws \Http\Client\Exception
     */
    public function getTimeTracking(string $id): TimeTracking
    { // TODO Broken Teamleader -> 400, "Key id must be present"
        $request = new TimeTrackingInfoRequest($id);

        return $this->handleRequest(
            $request,
            TimeTracking::class
        );
    }

    /**
     * @throws \Http\Client\Exception
     */
    public function addTimeTracking(TimeTracking $timeTracking): LinkedTimeTracking
    {
        $request = new TimeTrackingAddRequest($this->normalize($timeTracking));

        return $this->handleRequest(
            $request,
            LinkedTimeTracking::class
        );
    }

    /**
     * @throws \Http\Client\Exception
     */
    public function updateTimeTracking(TimeTracking $timeTracking): void
    {
        $request = new TimeTrackingUpdateRequest($this->normalize($timeTracking));

        $this->apiClient->handle($request);
    }

    /**
     * @param \DateTime|null $startedAt
     *
     * @throws \Http\Client\Exception
     */
    public function resumeTimeTracking(string $id, $startedAt = null): LinkedTimer
    {
        $request = new TimeTrackingResumeRequest($id, $startedAt);

        return $this->handleRequest(
            $request,
            LinkedTimer::class
        );
    }

    /**
     * @throws \Http\Client\Exception
     */
    public function deleteTimeTracking(string $id): void
    {
        $request = new TimeTrackingDeleteRequest($id);

        $this->apiClient->handle($request);
    }
}
