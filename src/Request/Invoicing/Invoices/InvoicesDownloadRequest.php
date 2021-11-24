<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\Invoicing\Invoices;

use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;
use QR\TeamleaderApiClient\Request\PostRequest;

/**
 * Class InvoicesDownloadRequest.
 */
class InvoicesDownloadRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * InvoicesDownloadRequest constructor.
     *
     * @param string $id
     * @param string $format
     */
    public function __construct($id, $format)
    {
        $this->body['id'] = $id;
        $this->body['format'] = $format;
    }

    /**
     * {@inheritdoc}
     */
    public function getEndpoint(): string
    {
        return 'invoices.download';
    }
}
