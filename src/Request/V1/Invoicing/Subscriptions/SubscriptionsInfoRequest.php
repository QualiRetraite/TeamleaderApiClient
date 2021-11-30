<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\V1\Invoicing\Subscriptions;

use QR\TeamleaderApiClient\Request\PostRequestV1;

class SubscriptionsInfoRequest extends PostRequestV1
{
    public function __construct(int $id)
    {
        $this->body['subscription_id'] = $id;
    }

    public function getEndpoint(): string
    {
        return 'api/getSubscription.php';
    }
}
