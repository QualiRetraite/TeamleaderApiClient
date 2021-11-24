<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\CRM\Contacts;

use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;
use QR\TeamleaderApiClient\Request\PostRequest;

/**
 * Class ContactsAddRequest.
 */
class ContactsAddRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * ContactsAddRequest constructor.
     *
     * @throws \Exception
     *
     * @param mixed[] $contact
     */
    public function __construct(array $contact)
    {
        unset($contact['web_url']);

        // Strip the time of the birthdate string
        if (isset($contact['birthdate'])) {
            $date = new \DateTime($contact['birthdate']);
            $contact['birthdate'] = $date->format('Y-m-d');
        }

        $this->body = $contact;
    }

    /**
     * {@inheritdoc}
     */
    public function getEndpoint(): string
    {
        return 'contacts.add';
    }
}
