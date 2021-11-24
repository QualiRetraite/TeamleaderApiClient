<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Repository;

use QR\TeamleaderApiClient\Model\User\User;
use QR\TeamleaderApiClient\Model\User\UserListView;
use QR\TeamleaderApiClient\Request\General\Users\UsersInfoRequest;
use QR\TeamleaderApiClient\Request\General\Users\UsersListRequest;
use QR\TeamleaderApiClient\Request\General\Users\UsersMeRequest;

/**
 * Class UserRepository.
 */
class UserRepository extends RepositoryBase
{
    /**
     * @throws \Http\Client\Exception
     */
    public function me(): User
    {
        $request = new UsersMeRequest();

        return $this->handleRequest(
            $request,
            User::class
        );
    }

    /**
     * @throws \Http\Client\Exception
     */
    public function getUser(string $id): User
    {
        $request = new UsersInfoRequest($id);

        return $this->handleRequest(
            $request,
            User::class
        );
    }

    /**
     * @return UserListView[]
     *
     * @throws \Http\Client\Exception
     */
    public function listUsers(array $filters = [], array $sort = [], array $page = []): array
    {
        $request = new UsersListRequest();
        $request->setFilters($filters);
        $request->setSort($sort);
        $request->setPage($page);

        return $this->handleRequest(
            $request,
            UserListView::class.'[]'
        );
    }
}
