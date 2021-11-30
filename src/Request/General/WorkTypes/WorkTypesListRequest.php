<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\General\WorkTypes;

use QR\TeamleaderApiClient\Request\Attributes\Filter\FilterInterface;
use QR\TeamleaderApiClient\Request\Attributes\Filter\FilterTrait;
use QR\TeamleaderApiClient\Request\Attributes\Page\PageInterface;
use QR\TeamleaderApiClient\Request\Attributes\Page\PageTrait;
use QR\TeamleaderApiClient\Request\Attributes\Sort\SortInterface;
use QR\TeamleaderApiClient\Request\Attributes\Sort\SortTrait;
use QR\TeamleaderApiClient\Request\BaseRequest;
use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;

class WorkTypesListRequest extends BaseRequest implements FilterInterface, PageInterface, SortInterface
{
    use FilterTrait;
    use MultipleMethodsTrait;
    use PageTrait;
    use SortTrait;

    public function getEndpoint(): string
    {
        return 'workTypes.list';
    }
}
