<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Repository;

use QR\TeamleaderApiClient\Model\Aggregate\DownloadedInvoice;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedInvoice;
use QR\TeamleaderApiClient\Model\Aggregate\PaymentWithDate;
use QR\TeamleaderApiClient\Model\Invoice\Invoice;
use QR\TeamleaderApiClient\Model\Invoice\InvoiceListView;
use QR\TeamleaderApiClient\Request\Invoicing\Invoices\InvoicesBookRequest;
use QR\TeamleaderApiClient\Request\Invoicing\Invoices\InvoicesCopyRequest;
use QR\TeamleaderApiClient\Request\Invoicing\Invoices\InvoicesDeleteRequest;
use QR\TeamleaderApiClient\Request\Invoicing\Invoices\InvoicesDownloadRequest;
use QR\TeamleaderApiClient\Request\Invoicing\Invoices\InvoicesDraftRequest;
use QR\TeamleaderApiClient\Request\Invoicing\Invoices\InvoicesInfoRequest;
use QR\TeamleaderApiClient\Request\Invoicing\Invoices\InvoicesListRequest;
use QR\TeamleaderApiClient\Request\Invoicing\Invoices\InvoicesRegisterPaymentRequest;
use QR\TeamleaderApiClient\Request\Invoicing\Invoices\InvoicesUpdateRequest;

/**
 * Class InvoiceRepository.
 */
class InvoiceRepository extends RepositoryBase
{
    /**
     * @throws \Http\Client\Exception
     */
    public function getInvoice(string $id): Invoice
    {
        $request = new InvoicesInfoRequest($id);

        return $this->handleRequest(
            $request,
            Invoice::class
        );
    }

    /**
     * @return InvoiceListView[]
     *
     * @throws \Http\Client\Exception
     */
    public function listInvoices(array $filters = [], array $page = [], array $sort = []): array
    {
        $request = new InvoicesListRequest();
        $request->setFilters($filters);
        $request->setPage($page);
        $request->setSort($sort);

        return $this->handleRequest(
            $request,
            InvoiceListView::class.'[]'
        );
    }

    /**
     * @throws \Http\Client\Exception
     */
    public function downloadInvoice(string $id, string $format): DownloadedInvoice
    {
        $request = new InvoicesDownloadRequest($id, $format);

        return $this->handleRequest(
            $request,
            DownloadedInvoice::class
        );
    }

    /**
     * @throws \Http\Client\Exception
     */
    public function draftInvoice(Invoice $invoice): LinkedInvoice
    {
        $request = new InvoicesDraftRequest($this->normalize($invoice));

        return $this->handleRequest(
            $request,
            LinkedInvoice::class
        );
    }

    /**
     * @throws \Http\Client\Exception
     */
    public function updateInvoice(Invoice $invoice): void
    {
        $request = new InvoicesUpdateRequest($this->normalize($invoice));

        $this->apiClient->handle($request);
    }

    /**
     * @throws \Http\Client\Exception
     */
    public function copyInvoice(string $id): LinkedInvoice
    {
        $request = new InvoicesCopyRequest($id);

        return $this->handleRequest($request, LinkedInvoice::class);
    }

    /**
     * @throws \Http\Client\Exception
     */
    public function bookInvoice(string $id, string $on): void
    {
        $request = new InvoicesBookRequest($id, $on);

        $this->apiClient->handle($request);
    }

    /**
     * @throws \Http\Client\Exception
     */
    public function deleteInvoice(string $id): void
    {
        $request = new InvoicesDeleteRequest($id);

        $this->apiClient->handle($request);
    }

    /**
     * @throws \Http\Client\Exception
     */
    public function registerPayment(string $id, PaymentWithDate $paymentWithDate): void
    {
        $request = new InvoicesRegisterPaymentRequest($id, $this->normalize($paymentWithDate));

        $this->apiClient->handle($request);
    }
}
