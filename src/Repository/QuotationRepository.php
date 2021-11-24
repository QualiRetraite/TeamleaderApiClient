<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Repository;

use QR\TeamleaderApiClient\Model\Aggregate\DownloadedQuotation;
use QR\TeamleaderApiClient\Model\Quotation\Quotation;
use QR\TeamleaderApiClient\Request\Deals\Quotations\QuotationsDownloadRequest;
use QR\TeamleaderApiClient\Request\Deals\Quotations\QuotationsInfoRequest;

/**
 * Class QuotationRepository.
 */
class QuotationRepository extends RepositoryBase
{
    /**
     * @throws \Http\Client\Exception
     */
    public function getQuotation(string $id): Quotation
    {
        $request = new QuotationsInfoRequest($id);

        return $this->handleRequest(
            $request,
            Quotation::class
        );
    }

    /**
     * @throws \Http\Client\Exception
     */
    public function downloadQuotation(string $id, string $format): DownloadedQuotation
    {
        $request = new QuotationsDownloadRequest($id, $format);

        return $this->handleRequest(
            $request,
            DownloadedQuotation::class
        );
    }
}
