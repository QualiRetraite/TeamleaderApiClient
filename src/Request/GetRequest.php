<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request;

abstract class GetRequest extends BaseRequest
{
    public function getMethod(): string
    {
        return 'GET';
    }
}
