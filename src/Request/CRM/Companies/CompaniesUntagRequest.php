<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\CRM\Companies;

use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;
use QR\TeamleaderApiClient\Request\PostRequest;

/**
 * Class CompaniesUntagRequest.
 */
class CompaniesUntagRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * CompaniesUntagRequest constructor.
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
        return 'companies.untag';
    }
}
