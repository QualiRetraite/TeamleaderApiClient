<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request;

/**
 * Interface RequestInterface.
 */
interface RequestInterface
{
    /**
     * @return string|null
     */
    public function getMethod();

    /**
     * @return string
     */
    public function getEndpoint();

    /**
     * @return array
     */
    public function getBody();
}
