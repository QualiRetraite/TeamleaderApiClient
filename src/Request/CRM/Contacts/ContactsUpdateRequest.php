<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\CRM\Contacts;

use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;
use QR\TeamleaderApiClient\Request\PostRequest;

/**
 * Class ContactsUpdateRequest.
 */
class ContactsUpdateRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * ContactsUpdateRequest constructor.
     *
     * @throws \Exception
     */
    public function __construct(array $contact)
    {
        unset(
            $contact['added_at'],
            $contact['updated_at'],
            $contact['web_url']
        );

        // Strip the time of the birthdate string
        if (isset($contact['birthdate'])) {
            $date = new \DateTime($contact['birthdate']);
            $contact['birthdate'] = $date->format('Y-m-d');
        }

        $customFields = $contact['custom_fields'];
        $contact['custom_fields'] = [];

        foreach ($customFields as $field) {
            if (isset($field['value'])) {
                $contact['custom_fields'][] = [
                    'id' => $field['definition']['id'],
                    'value' => $field['value'],
                ];
            }
        }

        $this->body = array_filter($contact, fn ($value): bool => !empty($value));
    }

    /**
     * {@inheritdoc}
     */
    public function getEndpoint(): string
    {
        return 'contacts.update';
    }
}
