<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\CRM\BusinessTypes;

use QR\TeamleaderApiClient\Request\GetRequest;
use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class BusinessTypesListRequest.
 */
class BusinessTypesListRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * BusinessTypesListRequest constructor.
     *
     * @param string|null $country
     */
    public function __construct($country = null)
    {
        $this->body['country'] = $country;
    }

    /**
     * {@inheritdoc}
     */
    public function getEndpoint(): string
    {
        return 'businessTypes.list';
    }
}
