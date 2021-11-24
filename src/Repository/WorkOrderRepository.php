<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Repository;

use QR\TeamleaderApiClient\Model\Aggregate\LinkedWorkOrder;
use QR\TeamleaderApiClient\Model\WorkOrder\WorkOrder;
use QR\TeamleaderApiClient\Request\WorkOrders\WorkOrders\WorkOrdersDraftRequest;

/**
 * Class WorkOrderRepository.
 */
class WorkOrderRepository extends RepositoryBase
{
    /**
     * @throws \Http\Client\Exception
     */
    public function draftWorkOrder(WorkOrder $workOrder): LinkedWorkOrder
    {
        $request = new WorkOrdersDraftRequest($this->normalize($workOrder));

        return $this->handleRequest(
            $request,
            LinkedWorkOrder::class
        );
    }
}
