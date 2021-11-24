<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Repository;

use QR\TeamleaderApiClient\Model\WorkType\WorkTypeListView;
use QR\TeamleaderApiClient\Request\General\WorkTypes\WorkTypesListRequest;

/**
 * Class WorkTypeRepository.
 */
class WorkTypeRepository extends RepositoryBase
{
    /**
     * @return WorkTypeListView[]
     *
     * @throws \Http\Client\Exception
     */
    public function listWorkTypes(array $filters = [], array $page = [], array $sort = []): array
    {
        $request = new WorkTypesListRequest();
        $request->setFilters($filters);
        $request->setSort($sort);
        $request->setPage($page);

        return $this->handleRequest(
            $request,
            WorkTypeListView::class.'[]'
        );
    }
}
