<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\Project;

use QR\TeamleaderApiClient\Model\Aggregate\LinkedMileStone;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedParticipantWithRole;

/**
 * Class Project.
 */
class Project extends ProjectBase
{
    /**
     * @var LinkedMileStone[]
     */
    private ?array $milestones = null;

    /**
     * @var LinkedParticipantWithRole[]
     */
    private ?array $participants = null;

    /**
     * @param LinkedMileStone[]           $milestones
     * @param LinkedParticipantWithRole[] $participants
     */
    public function create(
        string $title,
        string $startsOn,
        array $milestones,
        array $participants
    ): void {
        $this->setTitle($title);
        $this->setStartsOn($startsOn);
        $this->milestones = $milestones;
        $this->participants = $participants;
    }

    /**
     * @return LinkedMileStone[]
     */
    public function getMilestones(): array
    {
        return $this->milestones;
    }

    /**
     * @param LinkedMileStone[] $milestones
     */
    public function setMilestones(array $milestones): void
    {
        $this->milestones = $milestones;
    }

    /**
     * @return LinkedParticipantWithRole[]
     */
    public function getParticipants(): array
    {
        return $this->participants;
    }

    /**
     * @param LinkedParticipantWithRole[] $participants
     */
    public function setParticipants(array $participants): void
    {
        $this->participants = $participants;
    }
}
