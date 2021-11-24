<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\Deals\Deals;

use QR\TeamleaderApiClient\Request\GetRequest;
use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class DealsInfoRequest.
 */
class DealsInfoRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * DealsInfoRequest constructor.
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
        return 'deals.info';
    }
}
