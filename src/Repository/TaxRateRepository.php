<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Repository;

use QR\TeamleaderApiClient\Model\TaxRate\TaxRateListView;
use QR\TeamleaderApiClient\Request\Invoicing\TaxRates\TaxRatesListRequest;

/**
 * Class TaxRateRepository.
 */
class TaxRateRepository extends RepositoryBase
{
    /**
     * @return TaxRateListView[]
     *
     * @throws \Http\Client\Exception
     */
    public function listTaxRates(array $filters = [], array $page = [], array $sort = []): array
    {
        $request = new TaxRatesListRequest();
        $request->setFilters($filters);
        $request->setPage($page);
        $request->setSort($sort);

        return $this->handleRequest(
            $request,
            TaxRateListView::class.'[]'
        );
    }
}
