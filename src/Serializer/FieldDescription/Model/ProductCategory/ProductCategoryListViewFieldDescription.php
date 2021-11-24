<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\ProductCategory;

use QR\TeamleaderApiClient\Model\ProductCategory\ProductCategoryListView;

/**
 * Class ProductCategoryListViewFieldDescription.
 */
class ProductCategoryListViewFieldDescription extends ProductCategoryFieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\ProductCategory\ProductCategoryListView>
     */
    public function getTargetClass()
    {
        return ProductCategoryListView::class;
    }
}
