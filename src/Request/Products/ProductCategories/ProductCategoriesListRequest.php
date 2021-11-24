<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\Products\ProductCategories;

use QR\TeamleaderApiClient\Request\Attributes\Filter\FilterInterface;
use QR\TeamleaderApiClient\Request\Attributes\Filter\FilterTrait;
use QR\TeamleaderApiClient\Request\GetRequest;
use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class ProductCategoriesListRequest.
 */
class ProductCategoriesListRequest extends GetRequest implements FilterInterface
{
    use FilterTrait;
    use MultipleMethodsTrait;

    /**
     * {@inheritdoc}
     */
    public function getEndpoint(): string
    {
        return 'productCategories.list';
    }
}
