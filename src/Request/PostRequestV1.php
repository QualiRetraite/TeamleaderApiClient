<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request;

abstract class PostRequestV1 extends PostRequest
{
    public function isV1(): bool
    {
        return true;
    }
}
