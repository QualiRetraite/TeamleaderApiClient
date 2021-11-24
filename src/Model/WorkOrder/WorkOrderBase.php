<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\WorkOrder;

use DateTime;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedCustomer;

/**
 * Class WorkOrderBase.
 */
abstract class WorkOrderBase
{
    private ?\QR\TeamleaderApiClient\Model\Aggregate\LinkedCustomer $customer = null;

    private ?\DateTime $startsAt = null;

    private ?string $description = null;

    private ?string $departmentId = null;

    private ?string $milestoneId = null;

    private ?string $eventId = null;

    public function create(
        LinkedCustomer $customer,
        DateTime $startsAt
    ): void {
        $this->customer = $customer;
        $this->startsAt = $startsAt;
    }

    public function getCustomer(): LinkedCustomer
    {
        return $this->customer;
    }

    public function setCustomer(LinkedCustomer $customer): void
    {
        $this->customer = $customer;
    }

    public function getStartsAt(): DateTime
    {
        return $this->startsAt;
    }

    public function setStartsAt(DateTime $startsAt): void
    {
        $this->startsAt = $startsAt;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getDepartmentId(): string
    {
        return $this->departmentId;
    }

    public function setDepartmentId(string $departmentId): void
    {
        $this->departmentId = $departmentId;
    }

    public function getMilestoneId(): string
    {
        return $this->milestoneId;
    }

    public function setMilestoneId(string $milestoneId): void
    {
        $this->milestoneId = $milestoneId;
    }

    public function getEventId(): string
    {
        return $this->eventId;
    }

    public function setEventId(string $eventId): void
    {
        $this->eventId = $eventId;
    }
}
