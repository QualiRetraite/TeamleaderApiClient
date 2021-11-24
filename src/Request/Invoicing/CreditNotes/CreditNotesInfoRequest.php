<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\Invoicing\CreditNotes;

use QR\TeamleaderApiClient\Request\GetRequest;
use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class CreditNotesInfoRequest.
 */
class CreditNotesInfoRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * CreditNotesInfoRequest constructor.
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
        return 'creditNotes.info';
    }
}
