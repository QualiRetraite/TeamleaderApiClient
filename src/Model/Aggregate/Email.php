<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\Aggregate;

/**
 * Class Email.
 */
class Email
{
    /**
     * Email constructor.
     *
     * @param string|null $email
     * @param string|null $type
     */
    public function __construct(private $email = null, private $type = null)
    {
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
}
