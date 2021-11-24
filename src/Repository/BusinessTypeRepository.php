<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Repository;

use QR\TeamleaderApiClient\Model\BusinessType\BusinessTypeListView;
use QR\TeamleaderApiClient\Request\CRM\BusinessTypes\BusinessTypesListRequest;

/**
 * Class BusinessTypeRepository.
 */
class BusinessTypeRepository extends RepositoryBase
{
    /**
     * @param string|null $country
     *
     * @return BusinessTypeListView[]
     *
     * @throws \Http\Client\Exception
     */
    public function listBusinessTypes($country = null): array
    {
        $request = new BusinessTypesListRequest($country);

        return $this->handleRequest(
            $request,
            BusinessTypeListView::class.'[]'
        );
    }
}
