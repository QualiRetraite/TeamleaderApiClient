<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\CRM\Contacts;

use QR\TeamleaderApiClient\Request\GetRequest;
use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class ContactsInfoRequest.
 */
class ContactsInfoRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * ContactsInfoRequest constructor.
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
        return 'contacts.info';
    }
}
