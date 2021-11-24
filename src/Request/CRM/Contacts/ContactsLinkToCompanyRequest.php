<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\CRM\Contacts;

use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;
use QR\TeamleaderApiClient\Request\PostRequest;

/**
 * Class ContactsLinkToCompanyRequest.
 */
class ContactsLinkToCompanyRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * ContactsLinkToCompanyRequest constructor.
     *
     * @param string $id
     * @param string $companyId
     * @param string $position
     * @param bool   $decisionMaker
     */
    public function __construct(
        $id,
        $companyId,
        $position,
        $decisionMaker
    ) {
        $this->body['id'] = $id;
        $this->body['company_id'] = $companyId;
        $this->body['position'] = $position;
        $this->body['decision_maker'] = $decisionMaker;
    }

    /**
     * {@inheritdoc}
     */
    public function getEndpoint(): string
    {
        return 'contacts.linkToCompany';
    }
}
