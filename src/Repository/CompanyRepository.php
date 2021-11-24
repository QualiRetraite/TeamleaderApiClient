<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Repository;

use QR\TeamleaderApiClient\Model\Aggregate\LinkedCompany;
use QR\TeamleaderApiClient\Model\Company\Company;
use QR\TeamleaderApiClient\Model\Company\CompanyListView;
use QR\TeamleaderApiClient\Request\CRM\Companies\CompaniesAddRequest;
use QR\TeamleaderApiClient\Request\CRM\Companies\CompaniesDeleteRequest;
use QR\TeamleaderApiClient\Request\CRM\Companies\CompaniesInfoRequest;
use QR\TeamleaderApiClient\Request\CRM\Companies\CompaniesListRequest;
use QR\TeamleaderApiClient\Request\CRM\Companies\CompaniesTagRequest;
use QR\TeamleaderApiClient\Request\CRM\Companies\CompaniesUntagRequest;
use QR\TeamleaderApiClient\Request\CRM\Companies\CompaniesUpdateRequest;

/**
 * Class CompanyRepository.
 */
class CompanyRepository extends RepositoryBase
{
    /**
     * @throws \Http\Client\Exception
     */
    public function getCompany(string $id): Company
    {
        $request = new CompaniesInfoRequest($id);

        return $this->handleRequest(
            $request,
            Company::class
        );
    }

    /**
     * @return CompanyListView[]
     *
     * @throws \Http\Client\Exception
     */
    public function listCompanies(array $filters = [], array $page = [], array $sort = []): array
    {
        $request = new CompaniesListRequest();
        $request->setFilters($filters);
        $request->setPage($page);
        $request->setSort($sort);

        return $this->handleRequest(
            $request,
            CompanyListView::class.'[]'
        );
    }

    /**
     * @throws \Http\Client\Exception
     */
    public function addCompany(Company $company): LinkedCompany
    {
        $request = new CompaniesAddRequest($this->normalize($company));

        return $this->handleRequest(
            $request,
            LinkedCompany::class
        );
    }

    /**
     * @throws \Http\Client\Exception
     */
    public function updateCompany(Company $company): void
    {
        $request = new CompaniesUpdateRequest($this->normalize($company));

        $this->apiClient->handle($request);
    }

    /**
     * @throws \Http\Client\Exception
     */
    public function deleteCompany(string $id): void
    {
        $request = new CompaniesDeleteRequest($id);

        $this->apiClient->handle($request);
    }

    /**
     * @throws \Http\Client\Exception
     */
    public function tagCompany(string $id, array $tags): void
    {
        $request = new CompaniesTagRequest($id, $tags);

        $this->apiClient->handle($request);
    }

    /**
     * @throws \Http\Client\Exception
     */
    public function untagCompany(string $id, array $tags): void
    {
        $request = new CompaniesUntagRequest($id, $tags);

        $this->apiClient->handle($request);
    }
}
