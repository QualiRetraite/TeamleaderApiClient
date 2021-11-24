<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\Invoicing\Invoices;

use QR\TeamleaderApiClient\Request\GetRequest;
use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class InvoicesInfoRequest.
 */
class InvoicesInfoRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * InvoicesInfoRequest constructor.
     *
     * @param string $id
     */
    public function __construct($id)
    {
        $this->body['id'] = $id;
    }

    /**
     * {@inheritdoc}
     */
    public function getEndpoint(): string
    {
        return 'invoices.info';
    }
}
