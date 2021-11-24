<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\TimeTracking;

use DateTime;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedUser;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedWorkType;
use QR\TeamleaderApiClient\Model\ModelBase;

/**
 * Class TimeTrackingBase.
 */
abstract class TimeTrackingBase extends ModelBase
{
    private ?\QR\TeamleaderApiClient\Model\Aggregate\LinkedUser $user = null;

    private ?\QR\TeamleaderApiClient\Model\Aggregate\LinkedWorkType $workType = null;

    private ?string $startedOn = null;

    private ?\DateTime $startedAt = null;

    private ?\DateTime $endedAt = null;

    private ?int $duration = null;

    private ?string $description = null;

    private ?string $subject = null;

    private ?bool $invoiceAble = null;

    public function createWithDuration(
        LinkedWorkType $workType,
        DateTime $startedAt,
        int $duration
    ): void {
        $this->workType = $workType;
        $this->startedAt = $startedAt;
        $this->duration = $duration;
    }

    public function createWithEndDate(
        LinkedWorkType $workType,
        DateTime $startedAt,
        DateTime $endedAt
    ): void {
        $this->workType = $workType;
        $this->startedAt = $startedAt;
        $this->endedAt = $endedAt;
    }

    public function getUser(): LinkedUser
    {
        return $this->user;
    }

    public function setUser(LinkedUser $user): void
    {
        $this->user = $user;
    }

    public function getWorkType(): LinkedWorkType
    {
        return $this->workType;
    }

    public function setWorkType(LinkedWorkType $workType): void
    {
        $this->workType = $workType;
    }

    public function getStartedOn(): string
    {
        return $this->startedOn;
    }

    public function setStartedOn(string $startedOn): void
    {
        $this->startedOn = $startedOn;
    }

    public function getStartedAt(): DateTime
    {
        return $this->startedAt;
    }

    public function setStartedAt(DateTime $startedAt): void
    {
        $this->startedAt = $startedAt;
    }

    public function getEndedAt(): DateTime
    {
        return $this->endedAt;
    }

    public function setEndedAt(DateTime $endedAt): void
    {
        $this->endedAt = $endedAt;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function setDuration(int $duration): void
    {
        $this->duration = $duration;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): void
    {
        $this->subject = $subject;
    }

    public function getInvoiceAble(): bool
    {
        return $this->invoiceAble;
    }

    public function setInvoiceAble(bool $invoiceAble): void
    {
        $this->invoiceAble = $invoiceAble;
    }
}
