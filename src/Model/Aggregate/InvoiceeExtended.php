<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\Aggregate;

/**
 * Class InvoiceeExtended.
 */
class InvoiceeExtended extends InvoiceeBase
{
    private ?string $email = null;

    private ?string $NationalIdentificationNumber = null;

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getNationalIdentificationNumber(): string
    {
        return $this->NationalIdentificationNumber;
    }

    public function setNationalIdentificationNumber(string $NationalIdentificationNumber): void
    {
        $this->NationalIdentificationNumber = $NationalIdentificationNumber;
    }
}
