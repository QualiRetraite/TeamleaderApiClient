<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Repository;

use QR\TeamleaderApiClient\Model\Aggregate\LinkedDeal;
use QR\TeamleaderApiClient\Model\Deal\Deal;
use QR\TeamleaderApiClient\Model\Deal\DealListView;
use QR\TeamleaderApiClient\Model\LostReason\LostReasonListView;
use QR\TeamleaderApiClient\Request\Deals\Deals\DealsCreateRequest;
use QR\TeamleaderApiClient\Request\Deals\Deals\DealsDeleteRequest;
use QR\TeamleaderApiClient\Request\Deals\Deals\DealsInfoRequest;
use QR\TeamleaderApiClient\Request\Deals\Deals\DealsListRequest;
use QR\TeamleaderApiClient\Request\Deals\Deals\DealsLoseRequest;
use QR\TeamleaderApiClient\Request\Deals\Deals\DealsMoveRequest;
use QR\TeamleaderApiClient\Request\Deals\Deals\DealsUpdateRequest;
use QR\TeamleaderApiClient\Request\Deals\Deals\DealsWinRequest;
use QR\TeamleaderApiClient\Request\Deals\Deals\LostReasonsListRequest;

/**
 * Class DealRepository.
 */
class DealRepository extends RepositoryBase
{
    /**
     * @return DealListView[]
     *
     * @throws \Http\Client\Exception
     */
    public function listDeals(array $filters = [], array $page = [], array $sort = []): array
    {
        $request = new DealsListRequest();
        $request->setFilters($filters);
        $request->setSort($sort);
        $request->setPage($page);

        return $this->handleRequest(
            $request,
            DealListView::class.'[]'
        );
    }

    /**
     * @throws \Http\Client\Exception
     */
    public function getDeal(string $id): Deal
    {
        $request = new DealsInfoRequest($id);

        return $this->handleRequest(
            $request,
            Deal::class
        );
    }

    /**
     * @throws \Http\Client\Exception
     */
    public function addDeal(Deal $deal): LinkedDeal
    {
        $request = new DealsCreateRequest($this->normalize($deal));

        return $this->handleRequest(
            $request,
            LinkedDeal::class
        );
    }

    /**
     * @throws \Http\Client\Exception
     */
    public function updateDeal(Deal $deal): void
    {
        $request = new DealsUpdateRequest($this->normalize($deal));

        $this->apiClient->handle($request);
    }

    /**
     * @throws \Http\Client\Exception
     */
    public function moveDeal(string $id, string $phaseId): void
    {
        $request = new DealsMoveRequest($id, $phaseId);

        $this->apiClient->handle($request);
    }

    /**
     * @throws \Http\Client\Exception
     */
    public function winDeal(string $id): void
    {
        $request = new DealsWinRequest($id);

        $this->apiClient->handle($request);
    }

    /**
     * @param string|null $reasonId
     * @param string|null $extraInfo
     *
     * @throws \Http\Client\Exception
     */
    public function loseDeal(string $id, $reasonId = null, $extraInfo = null): void
    {
        $request = new DealsLoseRequest($id, $reasonId, $extraInfo);

        $this->apiClient->handle($request);
    }

    /**
     * @throws \Http\Client\Exception
     */
    public function deleteDeal(string $id): void
    {
        $request = new DealsDeleteRequest($id);

        $this->apiClient->handle($request);
    }

    /**
     * @return LostReasonListView[]
     *
     * @throws \Http\Client\Exception
     */
    public function listLostReasons(array $page = [], array $sort = []): array
    {
        $request = new LostReasonsListRequest();
        $request->setPage($page);
        $request->setSort($sort);

        return $this->handleRequest(
            $request,
            LostReasonListView::class.'[]'
        );
    }
}
