<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request;

/**
 * Class GetRequest.
 */
abstract class GetRequest extends BaseRequest
{
    /**
     * {@inheritdoc}
     */
    public function getMethod()
    {
        return 'GET';
    }
}
