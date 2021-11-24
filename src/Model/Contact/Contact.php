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

    private \QR\TeamleaderApiClient\Model\Aggregate\CustomField|\QR\TeamleaderApiClient\Model\Aggregate\LinkedCustomField $customFields;

    private ?\QR\TeamleaderApiClient\Model\Aggregate\CompanyEmployee $companies = null;

    public function create(string $lastName): void
    {
        $this->setLastName($lastName);
    }

    public function getRemarks(): string
    {
        return $this->remarks;
    }

    public function setRemarks(string $remarks): void
    {
        $this->remarks = $remarks;
    }

    public function hasMarketingMailsConsent(): bool
    {
        return $this->marketingMailsConsent;
    }

    public function setMarketingMailsConsent(bool $marketingMailsConsent): void
    {
        $this->marketingMailsConsent = $marketingMailsConsent;
    }

    /**
     * @return AddressWithType[]
     */
    public function getAddresses(): array
    {
        return $this->addresses;
    }

    /**
     * @param AddressWithType[] $addresses
     */
    public function setAddresses(array $addresses): void
    {
        $this->addresses = $addresses;
    }

    public function getCustomFields(): CustomField|LinkedCustomField
    {
        return $this->customFields;
    }

    public function setCustomFields(CustomField|LinkedCustomField $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getCompanies(): CompanyEmployee
    {
        return $this->companies;
    }

    public function setCompanies(CompanyEmployee $companies): void
    {
        $this->companies = $companies;
    }
}
