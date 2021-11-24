<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\Company;

use QR\TeamleaderApiClient\Model\Aggregate\Address;

/**
 * Class CompanyListView.
 */
class CompanyListView extends CompanyBase
{
    private ?\QR\TeamleaderApiClient\Model\Aggregate\Address $primaryAddress = null;

    public function getPrimaryAddress(): Address
    {
        return $this->primaryAddress;
    }

    public function setPrimaryAddress(Address $primaryAddress): void
    {
        $this->primaryAddress = $primaryAddress;
    }
}
