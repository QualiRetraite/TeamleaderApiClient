<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request;

/**
 * Class BaseRequest.
 */
abstract class BaseRequest implements RequestInterface
{
    protected array $body = [];

    /**
     * {@inheritdoc}
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * {@inheritdoc}
     */
    public function getMethod()
    {
        return 'GET';
    }
}
