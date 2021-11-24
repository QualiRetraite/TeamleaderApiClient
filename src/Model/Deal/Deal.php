<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\Deal;

use QR\TeamleaderApiClient\Model\Aggregate\LinkedCustomField;
use QR\TeamleaderApiClient\Model\Aggregate\PhaseHistory;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedQuotation;

/**
 * Class Deal.
 */
class Deal extends DealBase
{
    /**
     * @var PhaseHistory[]
     */
    private ?array $phaseHistory = null;

    /**
     * @var LinkedQuotation[]
     */
    private ?array $quotations = null;

    /**
     * @var LinkedCustomField[]
     */
    private ?array $customFields = null;

    /**
     * @return PhaseHistory[]
     */
    public function getPhaseHistory(): array
    {
        return $this->phaseHistory;
    }

    /**
     * @param PhaseHistory[] $phaseHistory
     */
    public function setPhaseHistory(array $phaseHistory): void
    {
        $this->phaseHistory = $phaseHistory;
    }

    /**
     * @return LinkedQuotation[]
     */
    public function getQuotations(): array
    {
        return $this->quotations;
    }

    /**
     * @param LinkedQuotation[] $quotations
     */
    public function setQuotations(array $quotations): void
    {
        $this->quotations = $quotations;
    }

    /**
     * @return LinkedCustomField[]
     */
    public function getCustomFields(): array
    {
        return $this->customFields;
    }

    /**
     * @param LinkedCustomField[] $customFields
     */
    public function setCustomFields(array $customFields): void
    {
        $this->customFields = $customFields;
    }
}
