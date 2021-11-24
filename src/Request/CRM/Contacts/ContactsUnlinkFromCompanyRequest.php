<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\CRM\Contacts;

use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;
use QR\TeamleaderApiClient\Request\PostRequest;

/**
 * Class ContactsUnlinkFromCompanyRequest.
 */
class ContactsUnlinkFromCompanyRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * ContactsUnlinkFromCompanyRequest constructor.
     *
     * @param string $id
     * @param string $companyId
     */
    public function __construct($id, $companyId)
    {
        $this->body['id'] = $id;
        $this->body['company_id'] = $companyId;
    }

    /**
     * {@inheritdoc}
     */
    public function getEndpoint(): string
    {
        return 'contacts.unlinkFromCompany';
    }
}
