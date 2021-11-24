<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\Company;

use QR\TeamleaderApiClient\Model\Aggregate\LinkedBusinessType;
use QR\TeamleaderApiClient\Model\Aggregate\Email;
use QR\TeamleaderApiClient\Model\Aggregate\InvoicingPreference;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedUser;
use QR\TeamleaderApiClient\Model\Aggregate\PaymentTerm;
use QR\TeamleaderApiClient\Model\Aggregate\Telephone;
use QR\TeamleaderApiClient\Model\ModelBase;

/**
 * Class CompanyBase.
 */
abstract class CompanyBase extends ModelBase
{
    private ?string $name = null;

    private ?LinkedBusinessType $businessType = null;

    private ?string $vatNumber = null;

    private ?string $nationalIdentificationNumber = null;

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

    private ?string $language = null;

    private ?string $preferredCurrency = null;

    private ?PaymentTerm $paymentTerm = null;

    private ?InvoicingPreference $invoicingPreferences = null;

    private ?LinkedUser $responsibleUser = null;

    private ?\DateTimeInterface $addedAt = null;

    private ?\DateTimeInterface $updatedAt = null;

    private ?string $webUrl = null;

    /**
     * @var string[]|null
     */
    private ?array $tags = null;

    public function create(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getBusinessType(): ?LinkedBusinessType
    {
        return $this->businessType;
    }

    public function setBusinessType(?LinkedBusinessType $businessType): void
    {
        $this->businessType = $businessType;
    }

    public function getVatNumber(): ?string
    {
        return $this->vatNumber;
    }

    public function setVatNumber(?string $vatNumber): void
    {
        $this->vatNumber = $vatNumber;
    }

    public function getNationalIdentificationNumber(): ?string
    {
        return $this->nationalIdentificationNumber;
    }

    public function setNationalIdentificationNumber(?string $nationalIdentificationNumber): void
    {
        $this->nationalIdentificationNumber = $nationalIdentificationNumber;
    }

    /**
     * @return Email[]|null
     */
    public function getEmails(): ?array
    {
        return $this->emails;
    }

    /**
     * @param Email[]|null $emails
     */
    public function setEmails(?array $emails): void
    {
        $this->emails = $emails;
    }

    /**
     * @return Telephone[]|null
     */
    public function getTelephones(): ?array
    {
        return $this->telephones;
    }

    /**
     * @param Telephone[]|null $telephones
     */
    public function setTelephones(?array $telephones): void
    {
        $this->telephones = $telephones;
    }

    public function getWebsite(): ?string
    {
        return $this->website;
    }

    public function setWebsite(?string $website): void
    {
        $this->website = $website;
    }

    public function getIban(): ?string
    {
        return $this->iban;
    }

    public function setIban(?string $iban): void
    {
        $this->iban = $iban;
    }

    public function getBic(): ?string
    {
        return $this->bic;
    }

    public function setBic(?string $bic): void
    {
        $this->bic = $bic;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(?string $language): void
    {
        $this->language = $language;
    }

    public function getPreferredCurrency(): ?string
    {
        return $this->preferredCurrency;
    }

    public function setPreferredCurrency(?string $preferredCurrency): void
    {
        $this->preferredCurrency = $preferredCurrency;
    }

    public function getPaymentTerm(): ?PaymentTerm
    {
        return $this->paymentTerm;
    }

    public function setPaymentTerm(?PaymentTerm $paymentTerm): void
    {
        $this->paymentTerm = $paymentTerm;
    }

    public function getInvoicingPreferences(): ?InvoicingPreference
    {
        return $this->invoicingPreferences;
    }

    public function setInvoicingPreferences(?InvoicingPreference $invoicingPreferences): void
    {
        $this->invoicingPreferences = $invoicingPreferences;
    }

    public function getResponsibleUser(): ?LinkedUser
    {
        return $this->responsibleUser;
    }

    public function setResponsibleUser(?LinkedUser $responsibleUser): void
    {
        $this->responsibleUser = $responsibleUser;
    }

    public function getAddedAt(): ?\DateTimeInterface
    {
        return $this->addedAt;
    }

    public function setAddedAt(?\DateTimeInterface $addedAt): void
    {
        $this->addedAt = $addedAt;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    public function getWebUrl(): ?string
    {
        return $this->webUrl;
    }

    public function setWebUrl(?string $webUrl): void
    {
        $this->webUrl = $webUrl;
    }

    /**
     * @return string[]|null
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    /**
     * @param string[] $tags
     */
    public function setTags(?array $tags): void
    {
        $this->tags = $tags;
    }
}
