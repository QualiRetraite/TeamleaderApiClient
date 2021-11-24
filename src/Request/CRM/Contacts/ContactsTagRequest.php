<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\CRM\Contacts;

use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;
use QR\TeamleaderApiClient\Request\PostRequest;

/**
 * Class ContactsTagRequest.
 */
class ContactsTagRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * ContactsTagRequest constructor.
     *
     * @param string $id
     */
    public function __construct($id, array $tags)
    {
        $this->body['id'] = $id;
        $this->body['tags'] = $tags;
    }

    /**
     * {@inheritdoc}
     */
    public function getEndpoint(): string
    {
        return 'contacts.tag';
    }
}
