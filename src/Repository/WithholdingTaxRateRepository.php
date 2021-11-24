<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Repository;

use QR\TeamleaderApiClient\Model\WithholdingTaxRate\WithholdingTaxRateListView;
use QR\TeamleaderApiClient\Request\Invoicing\WithholdingTaxRates\WithholdingTaxRatesListRequest;

/**
 * Class WithholdingTaxRateRepository.
 */
class WithholdingTaxRateRepository extends RepositoryBase
{
    /**
     * @return WithholdingTaxRateListView[]
     *
     * @throws \Http\Client\Exception
     */
    public function listWithholdingTaxRates(array $filters = []): array
    {
        $request = new WithholdingTaxRatesListRequest();
        $request->setFilters($filters);

        return $this->handleRequest(
            $request,
            WithholdingTaxRateListView::class.'[]'
        );
    }
}
