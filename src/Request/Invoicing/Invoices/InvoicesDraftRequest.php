<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\Invoicing\Invoices;

use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;
use QR\TeamleaderApiClient\Request\PostRequest;

/**
 * Class InvoicesDraftRequest.
 */
class InvoicesDraftRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * InvoicesDraftRequest constructor.
     *
     * @param mixed[] $invoice
     */
    public function __construct(array $invoice)
    {
        $invoice['department_id'] = $invoice['department']['id'];

        unset(
            $invoice['id'],
            $invoice['invoicee']['name'],
            $invoice['invoicee']['email'],
            $invoice['invoicee']['vat_number'],
            $invoice['total'],
            $invoice['invoice_number'],
            $invoice['payment_reference'],
            $invoice['payments'],
            $invoice['department'],
            $invoice['status'],
            $invoice['due_on'],
            $invoice['paid'],
            $invoice['created_at'],
            $invoice['updated_at']
        );

        foreach ($invoice['grouped_lines'] as $gl => $groupedLine) {
            foreach ($groupedLine['line_items'] as $li => $lineItem) {
                unset($invoice['grouped_lines'][$gl]['line_items'][$li]['tax']);
                unset($invoice['grouped_lines'][$gl]['line_items'][$li]['total']);
            }
        }

        $this->body = $invoice;
    }

    /**
     * {@inheritdoc}
     */
    public function getEndpoint(): string
    {
        return 'invoices.draft';
    }
}
