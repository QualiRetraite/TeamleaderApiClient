<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\Deals\Deals;

use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;
use QR\TeamleaderApiClient\Request\PostRequest;

/**
 * Class DealsLoseRequest.
 */
class DealsLoseRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * DealsLoseRequest constructor.
     *
     * @param string      $id
     * @param string|null $reasonId
     * @param string|null $extraInfo
     */
    public function __construct($id, $reasonId, $extraInfo)
    {
        $this->body['id'] = $id;
        $this->body['reason_id'] = $reasonId;
        $this->body['extra_info'] = $extraInfo;

        $this->body = array_filter($this->body, fn ($value): bool => !empty($value));
    }

    /**
     * {@inheritdoc}
     */
    public function getEndpoint(): string
    {
        return 'deals.lose';
    }
}
