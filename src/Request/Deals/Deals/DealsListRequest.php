<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\Deals\Deals;

use QR\TeamleaderApiClient\Request\Attributes\Filter\FilterInterface;
use QR\TeamleaderApiClient\Request\Attributes\Filter\FilterTrait;
use QR\TeamleaderApiClient\Request\Attributes\Page\PageInterface;
use QR\TeamleaderApiClient\Request\Attributes\Page\PageTrait;
use QR\TeamleaderApiClient\Request\Attributes\Sort\SortInterface;
use QR\TeamleaderApiClient\Request\Attributes\Sort\SortTrait;
use QR\TeamleaderApiClient\Request\GetRequest;
use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class DealsListRequest.
 */
class DealsListRequest extends GetRequest implements FilterInterface, PageInterface, SortInterface
{
    use FilterTrait;
    use MultipleMethodsTrait;
    use PageTrait;
    use SortTrait;

    /**
     * {@inheritdoc}
     */
    public function getEndpoint(): string
    {
        return 'deals.list';
    }
}
