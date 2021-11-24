<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\Deals\Deals;

use QR\TeamleaderApiClient\Request\Attributes\Page\PageInterface;
use QR\TeamleaderApiClient\Request\Attributes\Page\PageTrait;
use QR\TeamleaderApiClient\Request\Attributes\Sort\SortInterface;
use QR\TeamleaderApiClient\Request\Attributes\Sort\SortTrait;
use QR\TeamleaderApiClient\Request\GetRequest;
use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class LostReasonsListRequest.
 */
class LostReasonsListRequest extends GetRequest implements PageInterface, SortInterface
{
    use MultipleMethodsTrait;
    use PageTrait;
    use SortTrait;

    /**
     * {@inheritdoc}
     */
    public function getEndpoint(): string
    {
        return 'lostReasons.list';
    }
}
