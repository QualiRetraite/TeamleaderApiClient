<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Webhook;

use QR\TeamleaderApiClient\Model\Webhook\WebhookListView;

/**
 * Class WebhookListViewFieldDescription.
 */
class WebhookListViewFieldDescription extends WebhookFieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\Webhook\WebhookListView>
     */
    public function getTargetClass()
    {
        return WebhookListView::class;
    }
}
