<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Repository;

use QR\TeamleaderApiClient\Model\ProductCategory\ProductCategoryListView;
use QR\TeamleaderApiClient\Request\Products\ProductCategories\ProductCategoriesListRequest;

/**
 * Class ProductCategoryRepository.
 */
class ProductCategoryRepository extends RepositoryBase
{
    /**
     * @return ProductCategoryListView[]
     *
     * @throws \Http\Client\Exception
     */
    public function listProductCategories(array $filters = []): array
    {
        $request = new ProductCategoriesListRequest();
        $request->setFilters($filters);

        return $this->handleRequest(
            $request,
            ProductCategoryListView::class.'[]'
        );
    }
}
