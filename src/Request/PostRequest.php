<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request;

abstract class PostRequest extends BaseRequest
{
    public function getMethod(): string
    {
        return 'POST';
    }
}
