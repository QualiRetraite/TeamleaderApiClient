<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\CRM\Companies;

use QR\TeamleaderApiClient\Request\GetRequest;
use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class CompaniesInfoRequest.
 */
class CompaniesInfoRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * CompaniesInfoRequest constructor.
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
        return 'companies.info';
    }
}
