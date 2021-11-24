<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\CreditNote;

use DateTime;
use QR\TeamleaderApiClient\Model\Aggregate\InvoiceeMinimal;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedDepartment;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedInvoice;
use QR\TeamleaderApiClient\Model\Aggregate\Total;
use QR\TeamleaderApiClient\Model\ModelBase;

/**
 * Class CreditNoteBase.
 */
abstract class CreditNoteBase extends ModelBase
{
    private ?\QR\TeamleaderApiClient\Model\Aggregate\LinkedDepartment $department = null;

    private ?string $creditNoteNumber = null;

    private ?string $creditNoteDate = null;

    private ?string $status = null;

    private ?\QR\TeamleaderApiClient\Model\Aggregate\LinkedInvoice $invoice = null;

    private ?bool $paid = null;

    private ?\DateTime $paidAt = null;

    private ?\QR\TeamleaderApiClient\Model\Aggregate\InvoiceeMinimal $invoicee = null;

    private ?\QR\TeamleaderApiClient\Model\Aggregate\Total $total = null;

    private ?\DateTime $createdAt = null;

    private ?\DateTime $updatedAt = null;

    /**
     * @return LinkedDepartment
     */
    public function getDepartment()
    {
        return $this->department;
    }

    public function setDepartment(LinkedDepartment $department): void
    {
        $this->department = $department;
    }

    /**
     * @return string
     */
    public function getCreditNoteNumber()
    {
        return $this->creditNoteNumber;
    }

    public function setCreditNoteNumber(string $creditNoteNumber): void
    {
        $this->creditNoteNumber = $creditNoteNumber;
    }

    /**
     * @return string
     */
    public function getCreditNoteDate()
    {
        return $this->creditNoteDate;
    }

    public function setCreditNoteDate(string $creditNoteDate): void
    {
        $this->creditNoteDate = $creditNoteDate;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * @return LinkedInvoice
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    public function setInvoice(LinkedInvoice $invoice): void
    {
        $this->invoice = $invoice;
    }

    /**
     * @return bool
     */
    public function isPaid()
    {
        return $this->paid;
    }

    public function setPaid(bool $paid): void
    {
        $this->paid = $paid;
    }

    /**
     * @return DateTime
     */
    public function getPaidAt()
    {
        return $this->paidAt;
    }

    public function setPaidAt(DateTime $paidAt): void
    {
        $this->paidAt = $paidAt;
    }

    /**
     * @return InvoiceeMinimal
     */
    public function getInvoicee()
    {
        return $this->invoicee;
    }

    public function setInvoicee(InvoiceeMinimal $invoicee): void
    {
        $this->invoicee = $invoicee;
    }

    /**
     * @return Total
     */
    public function getTotal()
    {
        return $this->total;
    }

    public function setTotal(Total $total): void
    {
        $this->total = $total;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(DateTime $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }
}
