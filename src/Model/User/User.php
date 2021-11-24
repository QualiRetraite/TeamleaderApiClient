<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\User;

/**
 * Class User.
 */
class User extends UserBase
{
    private ?string $timezone = null;

    public function getTimezone(): string
    {
        return $this->timezone;
    }

    public function setTimezone(string $timezone): void
    {
        $this->timezone = $timezone;
    }
}
