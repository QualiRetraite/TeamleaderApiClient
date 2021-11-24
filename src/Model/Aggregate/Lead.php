<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\Aggregate;

/**
 * Class Lead.
 */
class Lead
{
    private ?\QR\TeamleaderApiClient\Model\Aggregate\LinkedCustomer $customer = null;

    private ?\QR\TeamleaderApiClient\Model\Aggregate\LinkedContact $contactPerson = null;

    public function getCustomer(): LinkedCustomer
    {
        return $this->customer;
    }

    public function setCustomer(LinkedCustomer $customer): void
    {
        $this->customer = $customer;
    }

    public function getContactPerson(): LinkedContact
    {
        return $this->contactPerson;
    }

    public function setContactPerson(LinkedContact $contactPerson): void
    {
        $this->contactPerson = $contactPerson;
    }
}
