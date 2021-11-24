<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\Company;

use QR\TeamleaderApiClient\Model\Aggregate\AddressWithType;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedCustomField;

/**
 * Class Company.
 */
class Company extends CompanyBase
{
    /**
     * @var AddressWithType[]
     */
    private ?array $addresses = null;

    private ?string $remarks = null;

    /**
     * @var LinkedCustomField[]
     */
    private ?array $customFields = null;

    private ?bool $marketingMailsConsent = null;

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

    public function getRemarks(): string
    {
        return $this->remarks;
    }

    public function setRemarks(string $remarks): void
    {
        $this->remarks = $remarks;
    }

    /**
     * @return \QR\TeamleaderApiClient\Model\Aggregate\LinkedCustomField[]
     */
    public function getCustomFields(): array
    {
        return $this->customFields;
    }

    /**
     * @param \QR\TeamleaderApiClient\Model\Aggregate\LinkedCustomField[] $customFields
     */
    public function setCustomFields(array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getMarketingMailsConsent(): bool
    {
        return $this->marketingMailsConsent;
    }

    public function setMarketingMailsConsent(bool $marketingMailsConsent): void
    {
        $this->marketingMailsConsent = $marketingMailsConsent;
    }
}
