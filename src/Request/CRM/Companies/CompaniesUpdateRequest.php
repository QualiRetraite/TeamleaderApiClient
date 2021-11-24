<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\CRM\Companies;

use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;
use QR\TeamleaderApiClient\Request\PostRequest;

/**
 * Class CompaniesUpdateRequest.
 */
class CompaniesUpdateRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * CompaniesUpdateRequest constructor.
     */
    public function __construct(array $company)
    {
        if (!empty($company['business_type'])) {
            $company['business_type_id'] = $company['business_type']['id'];
        }

        unset($company['business_type']);

        $customFields = $company['custom_fields'];
        $company['custom_fields'] = [];

        foreach ($customFields as $field) {
            if (isset($field['value'])) {
                $company['custom_fields'][] = [
                    'id' => $field['definition']['id'],
                    'value' => $field['value'],
                ];
            }
        }

        $this->body = array_filter($company, fn ($value): bool => !empty($value));
    }

    /**
     * {@inheritdoc}
     */
    public function getEndpoint(): string
    {
        return 'companies.update';
    }
}
