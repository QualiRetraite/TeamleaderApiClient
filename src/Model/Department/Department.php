<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\Department;

use QR\TeamleaderApiClient\Model\Aggregate\Address;
use QR\TeamleaderApiClient\Model\Aggregate\Email;
use QR\TeamleaderApiClient\Model\Aggregate\Telephone;

/**
 * Class Department.
 */
class Department extends DepartmentBase
{
    /**
     * @var Email[]
     */
    private ?array $emails = null;

    /**
     * @var Telephone[]
     */
    private ?array $telephones = null;

    private ?string $website = null;

    private ?string $iban = null;

    private ?string $bic = null;

    private ?string $fiscalRegime = null;

    private ?\QR\TeamleaderApiClient\Model\Aggregate\Address $address = null;

    /**
     * @return Email[]
     */
    public function getEmails(): array
    {
        return $this->emails;
    }

    /**
     * @param Email[] $emails
     */
    public function setEmails(array $emails): void
    {
        $this->emails = $emails;
    }

    /**
     * @return Telephone[]
     */
    public function getTelephones(): array
    {
        return $this->telephones;
    }

    /**
     * @param Telephone[] $telephones
     */
    public function setTelephones(array $telephones): void
    {
        $this->telephones = $telephones;
    }

    public function getWebsite(): string
    {
        return $this->website;
    }

    public function setWebsite(string $website): void
    {
        $this->website = $website;
    }

    public function getIban(): string
    {
        return $this->iban;
    }

    public function setIban(string $iban): void
    {
        $this->iban = $iban;
    }

    public function getBic(): string
    {
        return $this->bic;
    }

    public function setBic(string $bic): void
    {
        $this->bic = $bic;
    }

    public function getFiscalRegime(): string
    {
        return $this->fiscalRegime;
    }

    public function setFiscalRegime(string $fiscalRegime): void
    {
        $this->fiscalRegime = $fiscalRegime;
    }

    public function getAddress(): Address
    {
        return $this->address;
    }

    public function setAddress(Address $address): void
    {
        $this->address = $address;
    }
}
