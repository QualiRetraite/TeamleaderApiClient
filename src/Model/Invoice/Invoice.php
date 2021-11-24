<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\Invoice;

use QR\TeamleaderApiClient\Model\Aggregate\DiscountWithDescription;
use QR\TeamleaderApiClient\Model\Aggregate\GroupedLine;
use QR\TeamleaderApiClient\Model\Aggregate\Invoicee;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedDepartment;
use QR\TeamleaderApiClient\Model\Aggregate\PaymentTerm;
use QR\TeamleaderApiClient\Model\Aggregate\PaymentWithDate;

/**
 * Class Invoice.
 */
class Invoice extends InvoiceBase
{
    /**
     * @var DiscountWithDescription[]
     */
    private ?array $discounts = null;

    /**
     * @var GroupedLine[]
     */
    private ?array $groupedLines = null;

    private ?\QR\TeamleaderApiClient\Model\Aggregate\PaymentTerm $paymentTerm = null;

    private ?\QR\TeamleaderApiClient\Model\Aggregate\PaymentWithDate $payments = null;

    private ?string $paymentReference = null;

    private ?string $note = null;

    /**
     * @param GroupedLine[] $groupedLines
     */
    public function create(
        Invoicee $invoicee,
        LinkedDepartment $department,
        PaymentTerm $paymentTerm,
        array $groupedLines
    ): void {
        $this->setInvoicee($invoicee);
        $this->setDepartment($department);
        $this->paymentTerm = $paymentTerm;
        $this->groupedLines = $groupedLines;
    }

    /**
     * @return DiscountWithDescription[]
     */
    public function getDiscounts(): array
    {
        return $this->discounts;
    }

    /**
     * @param DiscountWithDescription[] $discounts
     */
    public function setDiscounts(array $discounts): void
    {
        $this->discounts = $discounts;
    }

    /**
     * @return GroupedLine[]
     */
    public function getGroupedLines(): array
    {
        return $this->groupedLines;
    }

    /**
     * @param GroupedLine[] $groupedLines
     */
    public function setGroupedLines(array $groupedLines): void
    {
        $this->groupedLines = $groupedLines;
    }

    public function getPaymentTerm(): PaymentTerm
    {
        return $this->paymentTerm;
    }

    public function setPaymentTerm(PaymentTerm $paymentTerm): void
    {
        $this->paymentTerm = $paymentTerm;
    }

    public function getPayments(): PaymentWithDate
    {
        return $this->payments;
    }

    public function setPayments(PaymentWithDate $payments): void
    {
        $this->payments = $payments;
    }

    public function getPaymentReference(): string
    {
        return $this->paymentReference;
    }

    public function setPaymentReference(string $paymentReference): void
    {
        $this->paymentReference = $paymentReference;
    }

    public function getNote(): string
    {
        return $this->note;
    }

    public function setNote(string $note): void
    {
        $this->note = $note;
    }
}
