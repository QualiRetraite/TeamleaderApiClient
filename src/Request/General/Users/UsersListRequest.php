<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\General\Users;

use QR\TeamleaderApiClient\Request\Attributes\Filter\FilterInterface;
use QR\TeamleaderApiClient\Request\Attributes\Filter\FilterTrait;
use QR\TeamleaderApiClient\Request\Attributes\Page\PageInterface;
use QR\TeamleaderApiClient\Request\Attributes\Page\PageTrait;
use QR\TeamleaderApiClient\Request\Attributes\Sort\SortInterface;
use QR\TeamleaderApiClient\Request\Attributes\Sort\SortTrait;
use QR\TeamleaderApiClient\Request\GetRequest;
use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class UsersListRequest.
 */
class UsersListRequest extends GetRequest implements FilterInterface, SortInterface, PageInterface
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
        return 'users.list';
    }
}
