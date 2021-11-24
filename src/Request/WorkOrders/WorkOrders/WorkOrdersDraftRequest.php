<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\WorkOrders\WorkOrders;

use QR\TeamleaderApiClient\Request\PostRequest;

/**
 * Class WorkOrdersDraftRequest.
 */
class WorkOrdersDraftRequest extends PostRequest
{
    /**
     * WorkOrdersDraftRequest constructor.
     *
     * @param mixed[] $workOrder
     */
    public function __construct(array $workOrder)
    {
        $this->body = $workOrder;
    }

    /**
     * {@inheritdoc}
     */
    public function getEndpoint(): string
    {
        return 'workOrders.draft';
    }
}
