<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\General\Departments;

use QR\TeamleaderApiClient\Request\Attributes\Filter\FilterInterface;
use QR\TeamleaderApiClient\Request\Attributes\Filter\FilterTrait;
use QR\TeamleaderApiClient\Request\Attributes\Sort\SortInterface;
use QR\TeamleaderApiClient\Request\Attributes\Sort\SortTrait;
use QR\TeamleaderApiClient\Request\GetRequest;
use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class DepartmentsListRequest.
 */
class DepartmentsListRequest extends GetRequest implements FilterInterface, SortInterface
{
    use FilterTrait;
    use MultipleMethodsTrait;
    use SortTrait;

    /**
     * {@inheritdoc}
     */
    public function getEndpoint(): string
    {
        return 'departments.list';
    }
}
