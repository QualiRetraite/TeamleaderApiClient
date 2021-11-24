<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\Invoicing\CreditNotes;

use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;
use QR\TeamleaderApiClient\Request\PostRequest;

/**
 * Class CreditNotesDownloadRequest.
 */
class CreditNotesDownloadRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * CreditNotesDownloadRequest constructor.
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
        return 'creditNotes.download';
    }
}
