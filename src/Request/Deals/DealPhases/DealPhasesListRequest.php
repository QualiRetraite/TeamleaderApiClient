<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\Deals\DealPhases;

use QR\TeamleaderApiClient\Request\Attributes\Filter\FilterInterface;
use QR\TeamleaderApiClient\Request\Attributes\Filter\FilterTrait;
use QR\TeamleaderApiClient\Request\Attributes\Page\PageInterface;
use QR\TeamleaderApiClient\Request\Attributes\Page\PageTrait;
use QR\TeamleaderApiClient\Request\GetRequest;
use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class DealPhasesListRequest.
 */
class DealPhasesListRequest extends GetRequest implements FilterInterface, PageInterface
{
    use FilterTrait;
    use MultipleMethodsTrait;
    use PageTrait;

    /**
     * {@inheritdoc}
     */
    public function getEndpoint(): string
    {
        return 'dealPhases.list';
    }
}
