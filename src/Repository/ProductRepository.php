<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Repository;

use QR\TeamleaderApiClient\Model\Product\ProductListView;
use QR\TeamleaderApiClient\Request\Products\Products\ProductsListRequest;

/**
 * Class ProductRepository.
 */
class ProductRepository extends RepositoryBase
{
    /**
     * @return ProductListView[]
     *
     * @throws \Http\Client\Exception
     */
    public function listProducts(array $filters = []): array
    {
        $request = new ProductsListRequest();
        $request->setFilters($filters);

        return $this->handleRequest(
            $request,
            ProductListView::class.'[]'
        );
    }
}
