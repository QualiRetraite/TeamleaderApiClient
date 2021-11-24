<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request;

/**
 * Class PostRequest.
 */
abstract class PostRequest extends BaseRequest
{
    /**
     * {@inheritdoc}
     */
    public function getMethod()
    {
        return 'POST';
    }
}
