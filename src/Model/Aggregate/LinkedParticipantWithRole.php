<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\Aggregate;

/**
 * Class LinkedParticipantWithRole.
 */
class LinkedParticipantWithRole
{
    /**
     * LinkedParticipantWithRole constructor.
     *
     * @param LinkedParticipant|null $participant
     */
    public function __construct(private $participant = null, private ?string $role = null)
    {
    }

    public function getParticipant(): LinkedParticipant
    {
        return $this->participant;
    }

    public function setParticipant(LinkedParticipant $participant): void
    {
        $this->participant = $participant;
    }

    /**
     * @return mixed
     */
    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(?string $role): void
    {
        $this->role = $role;
    }
}
