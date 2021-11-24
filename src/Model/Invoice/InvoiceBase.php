<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\Invoice;

use DateTime;
use QR\TeamleaderApiClient\Model\Aggregate\Invoicee;
use QR\TeamleaderApiClient\Model\Aggregate\InvoiceeExtended;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedDepartment;
use QR\TeamleaderApiClient\Model\Aggregate\TotalWithDue;
use QR\TeamleaderApiClient\Model\ModelBase;

/**
 * Class InvoiceBase.
 */
abstract class InvoiceBase extends ModelBase
{
    private ?\QR\TeamleaderApiClient\Model\Aggregate\LinkedDepartment $department = null;

    private ?string $invoiceNumber = null;

    /**
     * @var Invoicee|InvoiceeExtended
     */
    private $invoicee;

    private ?string $invoiceDate = null;

    private ?string $status = null;

    private ?string $dueOn = null;

    private ?bool $paid = null;

    private ?\DateTime $paidAt = null;

    private ?\QR\TeamleaderApiClient\Model\Aggregate\TotalWithDue $total = null;

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
    public function getInvoiceNumber()
    {
        return $this->invoiceNumber;
    }

    public function setInvoiceNumber(string $invoiceNumber): void
    {
        $this->invoiceNumber = $invoiceNumber;
    }

    /**
     * @return string
     */
    public function getInvoiceDate()
    {
        return $this->invoiceDate;
    }

    public function setInvoiceDate(string $invoiceDate): void
    {
        $this->invoiceDate = $invoiceDate;
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
     * @return string
     */
    public function getDueOn()
    {
        return $this->dueOn;
    }

    public function setDueOn(string $dueOn): void
    {
        $this->dueOn = $dueOn;
    }

    /**
     * @return bool
     */
    public function getPaid()
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
     * @return TotalWithDue
     */
    public function getTotal()
    {
        return $this->total;
    }

    public function setTotal(TotalWithDue $total): void
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

    /**
     * @return Invoicee
     */
    public function getInvoicee()
    {
        return $this->invoicee;
    }

    public function setInvoicee(Invoicee $invoicee): void
    {
        $this->invoicee = $invoicee;
    }
}
