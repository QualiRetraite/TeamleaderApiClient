<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\Deals\Deals;

use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;
use QR\TeamleaderApiClient\Request\PostRequest;

/**
 * Class DealsUpdateRequest.
 */
class DealsUpdateRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * DealsUpdateRequest constructor.
     */
    public function __construct(array $deal)
    {
        if (isset($deal['lead']['contact_person']['id'])) {
            $deal['lead']['contact_person_id'] = $deal['lead']['contact_person']['id'];
        }

        unset($deal['lead']['contact_person']);

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

        $this->body = array_filter(
            $deal,
            fn ($value): bool => !empty($value)
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getEndpoint(): string
    {
        return 'deals.update';
    }
}
