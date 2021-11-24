<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\Other\Webhooks;

use QR\TeamleaderApiClient\Request\GetRequest;
use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class WebhooksListRequest.
 */
class WebhooksListRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * {@inheritdoc}
     */
    public function getEndpoint(): string
    {
        return 'webhooks.list';
    }
}
