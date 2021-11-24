<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\Invoicing\PaymentTerms;

use QR\TeamleaderApiClient\Request\GetRequest;
use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class PaymentTermsListRequest.
 */
class PaymentTermsListRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * {@inheritdoc}
     */
    public function getEndpoint(): string
    {
        return 'paymentTerms.list';
    }
}
