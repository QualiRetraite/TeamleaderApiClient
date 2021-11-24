<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Repository;

use QR\TeamleaderApiClient\Model\Webhook\Webhook;
use QR\TeamleaderApiClient\Model\Webhook\WebhookListView;
use QR\TeamleaderApiClient\Request\Other\Webhooks\WebhooksListRequest;
use QR\TeamleaderApiClient\Request\Other\Webhooks\WebhooksRegisterRequest;
use QR\TeamleaderApiClient\Request\Other\Webhooks\WebhooksUnregisterRequest;

/**
 * Class WebhookRepository.
 */
class WebhookRepository extends RepositoryBase
{
    /**
     * @return WebhookListView[]
     *
     * @throws \Http\Client\Exception
     */
    public function listWebhooks(): array
    {
        $request = new WebhooksListRequest();

        return $this->handleRequest(
            $request,
            WebhookListView::class.'[]'
        );
    }

    /**
     * @throws \Http\Client\Exception
     */
    public function registerWebhook(Webhook $webhook): void
    {
        $request = new WebhooksRegisterRequest($this->normalize($webhook));

        $this->apiClient->handle($request);
    }

    /**
     * @throws \Http\Client\Exception
     */
    public function unRegisterWebHook(Webhook $webhook): void
    {
        $request = new WebhooksUnregisterRequest($this->normalize($webhook));

        $this->apiClient->handle($request);
    }
}
