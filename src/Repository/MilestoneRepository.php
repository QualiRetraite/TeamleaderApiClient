<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Repository;

use QR\TeamleaderApiClient\Model\Aggregate\LinkedMileStone;
use QR\TeamleaderApiClient\Model\Milestone\Milestone;
use QR\TeamleaderApiClient\Model\Milestone\MilestoneListView;
use QR\TeamleaderApiClient\Request\Projects\Milestones\MilestonesCreateRequest;
use QR\TeamleaderApiClient\Request\Projects\Milestones\MilestonesInfoRequest;
use QR\TeamleaderApiClient\Request\Projects\Milestones\MilestonesListRequest;
use QR\TeamleaderApiClient\Request\Projects\Milestones\MilestoneUpdateRequest;

/**
 * Class MilestoneRepository.
 */
class MilestoneRepository extends RepositoryBase
{
    /**
     * @return MilestoneListView[]
     *
     * @throws \Http\Client\Exception
     */
    public function listMilestones(array $filters = [], array $page = [], array $sort = []): array
    {
        $request = new MilestonesListRequest();
        $request->setFilters($filters);
        $request->setSort($sort);
        $request->setPage($page);

        return $this->handleRequest(
            $request,
            MilestoneListView::class.'[]'
        );
    }

    /**
     * @throws \Http\Client\Exception
     */
    public function getMilestone(string $id): Milestone
    {
        $request = new MilestonesInfoRequest($id);

        return $this->handleRequest(
            $request,
            Milestone::class
        );
    }

    /**
     * @throws \Http\Client\Exception
     */
    public function addMilestone(Milestone $milestone): LinkedMileStone
    {
        $request = new MilestonesCreateRequest($this->normalize($milestone));

        return $this->handleRequest(
            $request,
            LinkedMileStone::class
        );
    }

    /**
     * @throws \Http\Client\Exception
     */
    public function updateMilestone(Milestone $milestone): void
    {
        $request = new MilestoneUpdateRequest($this->normalize($milestone));

        $this->apiClient->handle($request);
    }
}
