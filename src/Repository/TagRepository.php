<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Repository;

use QR\TeamleaderApiClient\Model\Tag\TagListView;
use QR\TeamleaderApiClient\Request\CRM\Tags\TagsListRequest;
use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class TagRepository.
 */
class TagRepository extends RepositoryBase
{
    use MultipleMethodsTrait;

    /**
     * @return TagListView[]
     *
     * @throws \Http\Client\Exception
     */
    public function listTags(array $page = [], array $sort = []): array
    {
        $request = new TagsListRequest();
        $request->setPage($page);
        $request->setSort($sort);

        return $this->handleRequest(
            $request,
            TagListView::class.'[]'
        );
    }
}
