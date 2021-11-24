<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Repository;

use QR\TeamleaderApiClient\Model\Aggregate\DownloadedCreditNote;
use QR\TeamleaderApiClient\Model\CreditNote\CreditNote;
use QR\TeamleaderApiClient\Model\CreditNote\CreditNoteListView;
use QR\TeamleaderApiClient\Request\Invoicing\CreditNotes\CreditNotesDownloadRequest;
use QR\TeamleaderApiClient\Request\Invoicing\CreditNotes\CreditNotesInfoRequest;
use QR\TeamleaderApiClient\Request\Invoicing\CreditNotes\CreditNotesListRequest;

/**
 * Class CreditNoteRepository.
 */
class CreditNoteRepository extends RepositoryBase
{
    /**
     * @return CreditNoteListView[]
     *
     * @throws \Http\Client\Exception
     */
    public function listCreditNotes(array $filters = [], array $page = [], array $sort = []): array
    {
        $request = new CreditNotesListRequest();
        $request->setFilters($filters);
        $request->setPage($page);
        $request->setSort($sort);

        return $this->handleRequest(
            $request,
            CreditNoteListView::class.'[]'
        );
    }

    /**
     * @throws \Http\Client\Exception
     */
    public function getCreditNote(string $id): CreditNote
    {
        $request = new CreditNotesInfoRequest($id);

        return $this->handleRequest(
            $request,
            CreditNote::class
        );
    }

    /**
     * @throws \Http\Client\Exception
     */
    public function downloadCreditNote(string $id, string $format): DownloadedCreditNote
    {
        $request = new CreditNotesDownloadRequest($id, $format);

        return $this->handleRequest(
            $request,
            DownloadedCreditNote::class
        );
    }
}
