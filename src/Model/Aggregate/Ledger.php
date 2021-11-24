<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\Aggregate;

/**
 * Class Ledger.
 */
class Ledger
{
    private ?\QR\TeamleaderApiClient\Model\Aggregate\LinkedDepartment $department = null;

    private ?string $ledgerAccountNumber = null;

    public function getDepartment(): LinkedDepartment
    {
        return $this->department;
    }

    public function setDepartment(LinkedDepartment $department): void
    {
        $this->department = $department;
    }

    public function getLedgerAccountNumber(): string
    {
        return $this->ledgerAccountNumber;
    }

    public function setLedgerAccountNumber(string $ledgerAccountNumber): void
    {
        $this->ledgerAccountNumber = $ledgerAccountNumber;
    }
}
