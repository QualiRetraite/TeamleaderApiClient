<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\Deals\Deals;

use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;
use QR\TeamleaderApiClient\Request\PostRequest;

/**
 * Class DealsMoveRequest.
 */
class DealsMoveRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * DealsMoveRequest constructor.
     *
     * @param string $id
     * @param string $phaseId
     */
    public function __construct($id, $phaseId)
    {
        $this->body['id'] = $id;
        $this->body['phase_id'] = $phaseId;
    }

    /**
     * {@inheritdoc}
     */
    public function getEndpoint(): string
    {
        return 'deals.move';
    }
}
