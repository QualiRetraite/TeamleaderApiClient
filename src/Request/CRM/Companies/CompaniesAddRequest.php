<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\CRM\Companies;

use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;
use QR\TeamleaderApiClient\Request\PostRequest;

/**
 * Class CompaniesAddRequest.
 */
class CompaniesAddRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * CompaniesAddRequest constructor.
     */
    public function __construct(array $company)
    {
        if (!empty($company['business_type'])) {
            $company['business_type_id'] = $company['business_type']['id'];
        }

        unset($company['business_type']);

        if (isset($company['custom_fields'])) {
            foreach ($company['custom_fields'] as $key => $customField) {
                if (!isset($customField['id']) && isset($customField['definition'])) {
                    $company['custom_fields'][$key]['id'] = $customField['definition']['id'];
                    unset($company['custom_fields'][$key]['definition']);
                }
            }
        }

        $this->body = array_filter($company, fn ($value): bool => !empty($value));
    }

    /**
     * {@inheritdoc}
     */
    public function getEndpoint(): string
    {
        return 'companies.add';
    }
}
