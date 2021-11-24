<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Repository;

use QR\TeamleaderApiClient\Model\DealSource\DealSourceListView;
use QR\TeamleaderApiClient\Request\Deals\DealSources\DealSourcesListRequest;

/**
 * Class DealSourceRepository.
 */
class DealSourceRepository extends RepositoryBase
{
    /**
     * @return DealSourceListView[]
     *
     * @throws \Http\Client\Exception
     */
    public function listDealSources(array $filters = [], array $page = [], array $sort = []): array
    {
        $request = new DealSourcesListRequest();
        $request->setFilters($filters);
        $request->setPage($page);
        $request->setSort($sort);

        return $this->handleRequest(
            $request,
            DealSourceListView::class.'[]'
        );
    }
}
