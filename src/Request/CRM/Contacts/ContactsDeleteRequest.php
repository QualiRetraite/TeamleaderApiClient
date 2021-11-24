<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\CRM\Contacts;

use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;
use QR\TeamleaderApiClient\Request\PostRequest;

/**
 * Class ContactsDeleteRequest.
 */
class ContactsDeleteRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * ContactsDeleteRequest constructor.
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
        return 'contacts.delete';
    }
}
