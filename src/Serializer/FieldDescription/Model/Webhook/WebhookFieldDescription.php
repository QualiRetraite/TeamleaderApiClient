<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Webhook;

use QR\TeamleaderApiClient\Model\Webhook\Webhook;

/**
 * Class WebhookFieldDescription.
 */
class WebhookFieldDescription extends WebhookFieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\Webhook\Webhook>
     */
    public function getTargetClass()
    {
        return Webhook::class;
    }
}
