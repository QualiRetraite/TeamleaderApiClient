<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Repository;

use QR\TeamleaderApiClient\Model\ActivityType\ActivityTypeListView;
use QR\TeamleaderApiClient\Request\Calendar\ActivityTypes\ActivityTypesListRequest;

/**
 * Class ActivityTypeRepository.
 */
class ActivityTypeRepository extends RepositoryBase
{
    /**
     * @return ActivityTypeListView[]
     *
     * @throws \Http\Client\Exception
     */
    public function listActivityTypes(array $filters = [], array $page = []): array
    {
        $request = new ActivityTypesListRequest();
        $request->setFilters($filters);
        $request->setPage($page);

        return $this->handleRequest(
            $request,
            ActivityTypeListView::class.'[]'
        );
    }
}
