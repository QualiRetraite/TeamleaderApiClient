<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Repository;

use QR\TeamleaderApiClient\Model\Aggregate\LinkedContact;
use QR\TeamleaderApiClient\Model\Contact\ContactListView;
use QR\TeamleaderApiClient\Model\Contact\Contact;
use QR\TeamleaderApiClient\Request\CRM\Contacts\ContactsAddRequest;
use QR\TeamleaderApiClient\Request\CRM\Contacts\ContactsDeleteRequest;
use QR\TeamleaderApiClient\Request\CRM\Contacts\ContactsInfoRequest;
use QR\TeamleaderApiClient\Request\CRM\Contacts\ContactsLinkToCompanyRequest;
use QR\TeamleaderApiClient\Request\CRM\Contacts\ContactsListRequest;
use QR\TeamleaderApiClient\Request\CRM\Contacts\ContactsTagRequest;
use QR\TeamleaderApiClient\Request\CRM\Contacts\ContactsUnlinkFromCompanyRequest;
use QR\TeamleaderApiClient\Request\CRM\Contacts\ContactsUntagRequest;
use QR\TeamleaderApiClient\Request\CRM\Contacts\ContactsUpdateRequest;

/**
 * Class ContactRepository.
 */
class ContactRepository extends RepositoryBase
{
    /**
     * @return ContactListView[]
     *
     * @throws \Http\Client\Exception
     */
    public function listContacts(array $filters = [], array $page = [], array $sort = []): array
    {
        $request = new ContactsListRequest();
        $request->setFilters($filters);
        $request->setSort($sort);
        $request->setPage($page);

        return $this->handleRequest(
            $request,
            ContactListView::class.'[]'
        );
    }

    /**
     * @throws \Http\Client\Exception
     */
    public function getContact(string $id): Contact
    {
        $request = new ContactsInfoRequest($id);

        return $this->handleRequest(
            $request,
            Contact::class
        );
    }

    /**
     * @throws \Http\Client\Exception
     */
    public function addContact(Contact $contact): LinkedContact
    {
        $request = new ContactsAddRequest($this->normalize($contact));

        return $this->handleRequest(
            $request,
            LinkedContact::class
        );
    }

    /**
     * @throws \Http\Client\Exception
     */
    public function updateContact(Contact $contact): void
    {
        $request = new ContactsUpdateRequest($this->normalize($contact));

        $this->apiClient->handle($request);
    }

    /**
     * @throws \Http\Client\Exception
     */
    public function deleteContact(string $id): void
    {
        $request = new ContactsDeleteRequest($id);

        $this->apiClient->handle($request);
    }

    /**
     * @throws \Http\Client\Exception
     */
    public function tagContact(string $id, array $tags): void
    {
        $request = new ContactsTagRequest($id, $tags);

        $this->apiClient->handle($request);
    }

    /**
     * @throws \Http\Client\Exception
     */
    public function untagContact(string $id, array $tags): void
    {
        $request = new ContactsUntagRequest($id, $tags);

        $this->apiClient->handle($request);
    }

    /**
     * @throws \Http\Client\Exception
     */
    public function linkContactToCompany(
        string $id,
        string $companyId,
        string $position,
        bool $decisionMaker
    ): void {
        $request = new ContactsLinkToCompanyRequest(
            $id,
            $companyId,
            $position,
            $decisionMaker
        );

        $this->apiClient->handle($request);
    }

    /**
     * @throws \Http\Client\Exception
     */
    public function unlinkContactFromCompany(string $id, string $companyId): void
    {
        $request = new ContactsUnlinkFromCompanyRequest(
            $id,
            $companyId
        );

        $this->apiClient->handle($request);
    }
}
