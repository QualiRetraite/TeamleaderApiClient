<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\Products\Products;

use QR\TeamleaderApiClient\Request\Attributes\Filter\FilterInterface;
use QR\TeamleaderApiClient\Request\Attributes\Filter\FilterTrait;
use QR\TeamleaderApiClient\Request\GetRequest;
use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class ProductsListRequest.
 */
class ProductsListRequest extends GetRequest implements FilterInterface
{
    use FilterTrait;
    use MultipleMethodsTrait;

    /**
     * {@inheritdoc}
     */
    public function getEndpoint(): string
    {
        return 'products.list';
    }
}
