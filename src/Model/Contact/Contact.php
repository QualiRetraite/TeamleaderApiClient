<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\Contact;

use QR\TeamleaderApiClient\Model\Aggregate\AddressWithType;
use QR\TeamleaderApiClient\Model\Aggregate\CustomField;
use QR\TeamleaderApiClient\Model\Aggregate\CompanyEmployee;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedCustomField;

/**
 * Class Contact.
 */
class Contact extends ContactBase
{
    private ?string $remarks = null;

    private ?bool $marketingMailsConsent = null;

    /**
     * @var AddressWithType[]
     */
    private ?array $addresses = null;

    /**
     * @var array<CustomField|LinkedCustomField>
     */
    private array $customFields;

    /**
     * @var CompanyEmployee[]|null
     */
    private ?array $companies = null;

    public function create(string $lastName): void
    {
        $this->setLastName($lastName);
    }

    public function getRemarks(): ?string
    {
        return $this->remarks;
    }

    public function setRemarks(?string $remarks): void
    {
        $this->remarks = $remarks;
    }

    public function hasMarketingMailsConsent(): ?bool
    {
        return $this->marketingMailsConsent;
    }

    public function setMarketingMailsConsent(?bool $marketingMailsConsent): void
    {
        $this->marketingMailsConsent = $marketingMailsConsent;
    }

    /**
     * @return AddressWithType[]|null
     */
    public function getAddresses(): ?array
    {
        return $this->addresses;
    }

    /**
     * @param AddressWithType[]|null $addresses
     */
    public function setAddresses(?array $addresses): void
    {
        $this->addresses = $addresses;
    }

    /**
     * @return array<CustomField|LinkedCustomField>
     */
    public function getCustomFields(): array
    {
        return $this->customFields;
    }

    /**
     * @param array<CustomField|LinkedCustomField> $customFields
     */
    public function setCustomFields(array $customFields): void
    {
        $this->customFields = $customFields;
    }

    /**
     * @return CompanyEmployee[]
     */
    public function getCompanies(): array
    {
        return $this->companies;
    }

    /**
     * @param CompanyEmployee[] $companies
     */
    public function setCompanies(array $companies): void
    {
        $this->companies = $companies;
    }
}
