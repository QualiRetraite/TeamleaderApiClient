<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\CRM\Addresses;

use QR\TeamleaderApiClient\Request\GetRequest;
use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class LevelTwoAreasListRequest.
 */
class LevelTwoAreasListRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * LevelTwoAreasListRequest constructor.
     *
     * @param string      $country
     * @param string|null $language
     */
    public function __construct($country, $language = null)
    {
        $this->body['country'] = $country;

        if (null != $language) {
            $this->body['language'] = $language;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getEndpoint(): string
    {
        return 'levelTwoAreas.list';
    }
}
