<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Repository;

use QR\TeamleaderApiClient\Model\LevelTwoArea\LevelTwoAreaListView;
use QR\TeamleaderApiClient\Request\CRM\Addresses\LevelTwoAreasListRequest;

/**
 * Class LevelTwoAreaRepository.
 */
class LevelTwoAreaRepository extends RepositoryBase
{
    /**
     * @param string|null $language
     *
     * @return LevelTwoAreaListView[]
     *
     * @throws \Http\Client\Exception
     */
    public function listLevelTwoAreas(string $country, $language = null): array
    {
        $request = new LevelTwoAreasListRequest($country, $language);

        return $this->handleRequest(
            $request,
            LevelTwoAreaListView::class.'[]'
        );
    }
}
