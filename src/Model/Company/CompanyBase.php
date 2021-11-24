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

    private ?\QR\TeamleaderApiClient\Model\Aggregate\LinkedBusinessType $businessType = null;

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

    private ?\QR\TeamleaderApiClient\Model\Aggregate\PaymentTerm $paymentTerm = null;

    private ?\QR\TeamleaderApiClient\Model\Aggregate\InvoicingPreference $invoicingPreferences = null;

    private ?\QR\TeamleaderApiClient\Model\Aggregate\LinkedUser $responsibleUser = null;

    private ?string $addedAt = null;

    private ?string $updatedAt = null;

    private ?string $webUrl = null;

    /**
     * @var string[]
     */
    private ?array $tags = null;

    public function create(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return LinkedBusinessType
     */
    public function getBusinessType()
    {
        return $this->businessType;
    }

    public function setBusinessType(LinkedBusinessType $businessType): void
    {
        $this->businessType = $businessType;
    }

    /**
     * @return string
     */
    public function getVatNumber()
    {
        return $this->vatNumber;
    }

    public function setVatNumber(string $vatNumber): void
    {
        $this->vatNumber = $vatNumber;
    }

    /**
     * @return string
     */
    public function getNationalIdentificationNumber()
    {
        return $this->nationalIdentificationNumber;
    }

    public function setNationalIdentificationNumber(string $nationalIdentificationNumber): void
    {
        $this->nationalIdentificationNumber = $nationalIdentificationNumber;
    }

    /**
     * @return Email[]
     */
    public function getEmails()
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
    public function getTelephones()
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

    /**
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    public function setWebsite(string $website): void
    {
        $this->website = $website;
    }

    /**
     * @return string
     */
    public function getIban()
    {
        return $this->iban;
    }

    public function setIban(string $iban): void
    {
        $this->iban = $iban;
    }

    /**
     * @return string
     */
    public function getBic()
    {
        return $this->bic;
    }

    public function setBic(string $bic): void
    {
        $this->bic = $bic;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    public function setLanguage(string $language): void
    {
        $this->language = $language;
    }

    /**
     * @return string
     */
    public function getPreferredCurrency()
    {
        return $this->preferredCurrency;
    }

    public function setPreferredCurrency(string $preferredCurrency): void
    {
        $this->preferredCurrency = $preferredCurrency;
    }

    /**
     * @return PaymentTerm
     */
    public function getPaymentTerm()
    {
        return $this->paymentTerm;
    }

    public function setPaymentTerm(PaymentTerm $paymentTerm): void
    {
        $this->paymentTerm = $paymentTerm;
    }

    /**
     * @return InvoicingPreference
     */
    public function getInvoicingPreferences()
    {
        return $this->invoicingPreferences;
    }

    public function setInvoicingPreferences(InvoicingPreference $invoicingPreferences): void
    {
        $this->invoicingPreferences = $invoicingPreferences;
    }

    /**
     * @return LinkedUser
     */
    public function getResponsibleUser()
    {
        return $this->responsibleUser;
    }

    public function setResponsibleUser(LinkedUser $responsibleUser): void
    {
        $this->responsibleUser = $responsibleUser;
    }

    /**
     * @return string
     */
    public function getAddedAt()
    {
        return $this->addedAt;
    }

    public function setAddedAt(string $addedAt): void
    {
        $this->addedAt = $addedAt;
    }

    /**
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(string $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return string
     */
    public function getWebUrl()
    {
        return $this->webUrl;
    }

    public function setWebUrl(string $webUrl): void
    {
        $this->webUrl = $webUrl;
    }

    /**
     * @return string[]
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param string[] $tags
     */
    public function setTags(array $tags): void
    {
        $this->tags = $tags;
    }
}
