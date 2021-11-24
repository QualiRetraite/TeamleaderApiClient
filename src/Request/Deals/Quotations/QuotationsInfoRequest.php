<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\Deals\Quotations;

use QR\TeamleaderApiClient\Request\GetRequest;
use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class QuotationsInfoRequest.
 */
class QuotationsInfoRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * QuotationsInfoRequest constructor.
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
        return 'quotations.info';
    }
}
