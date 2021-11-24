<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\Deals\Deals;

use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;
use QR\TeamleaderApiClient\Request\PostRequest;

/**
 * Class DealsCreateRequest.
 */
class DealsCreateRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * DealsCreateRequest constructor.
     */
    public function __construct(array $deal)
    {
        if (isset($deal['lead']['contact_person']['id'])) {
            $deal['lead']['contact_person_id'] = $deal['lead']['contact_person']['id'];
        }

        unset($deal['lead']['contact_person']);

        if (isset($deal['custom_fields'])) {
            $customFields = $deal['custom_fields'];
            $deal['custom_fields'] = [];

            foreach ($customFields as $field) {
                if (isset($field['value'])) {
                    $deal['custom_fields'][] = [
                        'id' => $field['definition']['id'],
                        'value' => $field['value'],
                    ];
                }
            }
        }

        $this->body = array_filter($deal, fn ($value): bool => isset($value));
    }

    /**
     * {@inheritdoc}
     */
    public function getEndpoint(): string
    {
        return 'deals.create';
    }
}
