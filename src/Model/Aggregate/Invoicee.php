<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\Aggregate;

/**
 * Class Invoicee.
 */
class Invoicee extends InvoiceeBase
{
    /**
     * Invoicee constructor.
     */
    public function __construct(
        LinkedCustomer $linkedCustomer = null,
        ContactWithName $contactWithName = null
    ) {
        $this->setCustomer($linkedCustomer);
        $this->setForAttentionOf($contactWithName);
    }
}
