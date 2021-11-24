<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Repository;

use QR\TeamleaderApiClient\Model\CustomFieldDefinition\CustomFieldDefinition;
use QR\TeamleaderApiClient\Model\CustomFieldDefinition\CustomFieldDefinitionListView;
use QR\TeamleaderApiClient\Request\General\CustomFieldDefinition\CustomFieldDefinitionInfoRequest;
use QR\TeamleaderApiClient\Request\General\CustomFieldDefinition\CustomFieldDefinitionListRequest;

/**
 * Class CustomFieldDefinitionRepository.
 */
class CustomFieldDefinitionRepository extends RepositoryBase
{
    /**
     * @throws \Http\Client\Exception
     */
    public function getCustomFieldDefinition(string $id): CustomFieldDefinition
    {
        $request = new CustomFieldDefinitionInfoRequest($id);

        return $this->handleRequest(
            $request,
            CustomFieldDefinition::class
        );
    }

    /**
     * @return CustomFieldDefinitionListView[]
     *
     * @throws \Http\Client\Exception
     */
    public function listCustomFieldDefinitions(array $page = [], array $sort = []): array
    {
        $request = new CustomFieldDefinitionListRequest();
        $request->setSort($sort);
        $request->setPage($page);

        return $this->handleRequest(
            $request,
            CustomFieldDefinitionListView::class.'[]'
        );
    }
}
