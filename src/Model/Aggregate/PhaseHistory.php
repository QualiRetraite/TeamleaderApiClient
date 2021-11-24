<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\Aggregate;

/**
 * Class PhaseHistory.
 */
class PhaseHistory
{
    private ?\QR\TeamleaderApiClient\Model\Aggregate\LinkedPhase $phase = null;

    private ?\DateTime $startedAt = null;

    private ?\QR\TeamleaderApiClient\Model\Aggregate\LinkedUser $startedBy = null;

    public function getPhase(): LinkedPhase
    {
        return $this->phase;
    }

    public function setPhase(LinkedPhase $phase): void
    {
        $this->phase = $phase;
    }

    public function getStartedAt(): \DateTime
    {
        return $this->startedAt;
    }

    public function setStartedAt(\DateTime $startedAt): void
    {
        $this->startedAt = $startedAt;
    }

    public function getStartedBy(): LinkedUser
    {
        return $this->startedBy;
    }

    public function setStartedBy(LinkedUser $startedBy): void
    {
        $this->startedBy = $startedBy;
    }
}
