<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\Aggregate;

/**
 * Class CompanyEmployee.
 */
class CompanyEmployee
{
    private ?string $position = null;

    private ?bool $decisionMaker = null;

    private ?\QR\TeamleaderApiClient\Model\Aggregate\LinkedDefinition $company = null;

    public function getPosition(): string
    {
        return $this->position;
    }

    public function setPosition(string $position): void
    {
        $this->position = $position;
    }

    public function getDecisionMaker(): bool
    {
        return $this->decisionMaker;
    }

    public function setDecisionMaker(bool $decisionMaker): void
    {
        $this->decisionMaker = $decisionMaker;
    }

    public function getCompany(): LinkedDefinition
    {
        return $this->company;
    }

    public function setCompany(LinkedDefinition $company): void
    {
        $this->company = $company;
    }
}
