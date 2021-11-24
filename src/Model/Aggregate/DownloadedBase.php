<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\Aggregate;

use DateTime;

/**
 * Class DownloadedBase.
 */
abstract class DownloadedBase
{
    private ?string $location = null;

    private ?\DateTime $expires = null;

    public function getLocation(): string
    {
        return $this->location;
    }

    public function setLocation(string $location): void
    {
        $this->location = $location;
    }

    public function getExpires(): DateTime
    {
        return $this->expires;
    }

    public function setExpires(DateTime $expires): void
    {
        $this->expires = $expires;
    }
}
