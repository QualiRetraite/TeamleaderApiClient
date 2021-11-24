<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request;

/**
 * Interface SupportsMultipleMethods.
 *
 * Used to indicate requests that support multiple methods.
 */
interface SupportsMultipleMethods
{
    public function setMethod(string $method): void;
}
