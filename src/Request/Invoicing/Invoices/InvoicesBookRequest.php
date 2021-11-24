<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\Invoicing\Invoices;

use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;
use QR\TeamleaderApiClient\Request\PostRequest;

/**
 * Class InvoicesBookRequest.
 */
class InvoicesBookRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * InvoicesBookRequest constructor.
     *
     * @param string $id
     * @param string $on
     */
    public function __construct($id, $on)
    {
        $this->body['id'] = $id;
        $this->body['on'] = $on;
    }

    /**
     * {@inheritdoc}
     */
    public function getEndpoint(): string
    {
        return 'invoices.book';
    }
}
