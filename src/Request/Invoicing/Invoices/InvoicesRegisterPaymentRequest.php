<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\Invoicing\Invoices;

use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;
use QR\TeamleaderApiClient\Request\PostRequest;

/**
 * Class InvoicesRegisterPaymentRequest.
 */
class InvoicesRegisterPaymentRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * InvoicesRegisterPaymentRequest constructor.
     *
     * @param string  $id
     * @param mixed[] $paymentWithDate
     */
    public function __construct($id, array $paymentWithDate)
    {
        $this->body = $paymentWithDate;
        $this->body['id'] = $id;
    }

    /**
     * {@inheritdoc}
     */
    public function getEndpoint(): string
    {
        return 'invoices.registerPayment';
    }
}
