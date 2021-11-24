<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Product;

use QR\TeamleaderApiClient\Model\Product\ProductListView;

/**
 * Class ProductListViewFieldDescription.
 */
class ProductListViewFieldDescription extends ProductFieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\Product\ProductListView>
     */
    public function getTargetClass()
    {
        return ProductListView::class;
    }
}
