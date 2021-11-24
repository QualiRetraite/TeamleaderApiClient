<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\Deals\Deals;

use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;
use QR\TeamleaderApiClient\Request\PostRequest;

/**
 * Class DealsWinRequest.
 */
class DealsWinRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * DealsWinRequest constructor.
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
        return 'deals.win';
    }
}
