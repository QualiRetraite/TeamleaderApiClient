<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Repository;

use QR\TeamleaderApiClient\Model\DealPhase\DealPhaseListView;
use QR\TeamleaderApiClient\Request\Deals\DealPhases\DealPhasesListRequest;

/**
 * Class DealPhaseRepository.
 */
class DealPhaseRepository extends RepositoryBase
{
    /**
     * @return DealPhaseListView[]
     *
     * @throws \Http\Client\Exception
     */
    public function listDealPhases(array $filters = [], array $page = []): array
    {
        $request = new DealPhasesListRequest();
        $request->setFilters($filters);
        $request->setPage($page);

        return $this->handleRequest(
            $request,
            DealPhaseListView::class.'[]'
        );
    }
}
