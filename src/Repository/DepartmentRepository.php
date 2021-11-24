<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Repository;

use QR\TeamleaderApiClient\Model\Department\Department;
use QR\TeamleaderApiClient\Model\Department\DepartmentListView;
use QR\TeamleaderApiClient\Request\General\Departments\DepartmentsInfoRequest;
use QR\TeamleaderApiClient\Request\General\Departments\DepartmentsListRequest;

/**
 * Class DepartmentRepository.
 */
class DepartmentRepository extends RepositoryBase
{
    /**
     * @throws \Http\Client\Exception
     */
    public function getDepartment(string $id): Department
    {
        $request = new DepartmentsInfoRequest($id);

        return $this->handleRequest(
            $request,
            Department::class
        );
    }

    /**
     * @return DepartmentListView[]
     *
     * @throws \Http\Client\Exception
     */
    public function listDepartments(array $filters = [], array $sort = []): array
    {
        $request = new DepartmentsListRequest();
        $request->setFilters($filters);
        $request->setSort($sort);

        return $this->handleRequest(
            $request,
            DepartmentListView::class.'[]'
        );
    }
}
