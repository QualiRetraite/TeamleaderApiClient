<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\Other\Webhooks;

use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;
use QR\TeamleaderApiClient\Request\PostRequest;

/**
 * Class WebhooksRegisterRequest.
 */
class WebhooksRegisterRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * WebhooksRegisterRequest constructor.
     *
     * @param mixed[] $webhook
     */
    public function __construct(array $webhook)
    {
        $this->body = $webhook;
    }

    /**
     * {@inheritdoc}
     */
    public function getEndpoint(): string
    {
        return 'webhooks.register';
    }
}
