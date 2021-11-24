<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Repository;

use QR\TeamleaderApiClient\Model\PaymentTerm\PaymentTermListView;
use QR\TeamleaderApiClient\Request\Invoicing\PaymentTerms\PaymentTermsListRequest;

/**
 * Class PaymentTermRepository.
 */
class PaymentTermRepository extends RepositoryBase
{
    /**
     * @return PaymentTermListView[]
     *
     * @throws \Http\Client\Exception
     */
    public function listPaymentTerms(): array
    {
        $request = new PaymentTermsListRequest();

        return $this->handleRequest(
            $request,
            PaymentTermListView::class.'[]'
        );
    }
}
