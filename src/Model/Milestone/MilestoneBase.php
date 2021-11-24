<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\Milestone;

use QR\TeamleaderApiClient\Model\Aggregate\LinkedUser;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedProject;
use QR\TeamleaderApiClient\Model\ModelBase;

/**
 * Class MilestoneBase.
 */
abstract class MilestoneBase extends ModelBase
{
    private ?\QR\TeamleaderApiClient\Model\Aggregate\LinkedProject $project = null;

    private ?string $dueOn = null;

    private ?string $name = null;

    private ?\QR\TeamleaderApiClient\Model\Aggregate\LinkedUser $responsibleUser = null;

    private ?string $status = null;

    public function create(
        LinkedProject $project,
        string $dueOn,
        string $name,
        LinkedUser $responsibleUser
    ): void {
        $this->project = $project;
        $this->dueOn = $dueOn;
        $this->name = $name;
        $this->responsibleUser = $responsibleUser;
    }

    public function getProject(): LinkedProject
    {
        return $this->project;
    }

    public function setProject(LinkedProject $project): void
    {
        $this->project = $project;
    }

    public function getDueOn(): string
    {
        return $this->dueOn;
    }

    public function setDueOn(string $dueOn): void
    {
        $this->dueOn = $dueOn;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getResponsibleUser(): LinkedUser
    {
        return $this->responsibleUser;
    }

    public function setResponsibleUser(LinkedUser $responsibleUser): void
    {
        $this->responsibleUser = $responsibleUser;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }
}
