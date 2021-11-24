<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\CRM\Companies;

use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;
use QR\TeamleaderApiClient\Request\PostRequest;

/**
 * Class CompaniesDeleteRequest.
 */
class CompaniesDeleteRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * CompaniesDeleteRequest constructor.
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
        return 'companies.delete';
    }
}
