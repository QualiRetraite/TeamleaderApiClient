<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\Timer;

use DateTime;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedUser;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedSubject;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedWorkType;
use QR\TeamleaderApiClient\Model\ModelBase;

/**
 * Class TimerBase.
 */
abstract class TimerBase extends ModelBase
{
    private ?\QR\TeamleaderApiClient\Model\Aggregate\LinkedUser $user = null;

    private ?bool $invoiceable = null;

    /**
     * TimerBase constructor.
     *
     * @param string|null $description
     */
    public function __construct(private LinkedWorkType $workType = null, private DateTime $startedAt = null, private $description = null, private LinkedSubject $subject = null)
    {
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

    public function getStartedAt(): DateTime
    {
        return $this->startedAt;
    }

    public function setStartedAt(DateTime $startedAt): void
    {
        $this->startedAt = $startedAt;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getSubject(): LinkedSubject
    {
        return $this->subject;
    }

    public function setSubject(LinkedSubject $subject): void
    {
        $this->subject = $subject;
    }

    public function getInvoiceable(): bool
    {
        return $this->invoiceable;
    }

    public function setInvoiceable(bool $invoiceable): void
    {
        $this->invoiceable = $invoiceable;
    }
}
