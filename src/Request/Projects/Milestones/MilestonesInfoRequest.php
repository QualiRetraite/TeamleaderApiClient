<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\Projects\Milestones;

use QR\TeamleaderApiClient\Request\GetRequest;
use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class MilestonesInfoRequest.
 */
class MilestonesInfoRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * MilestonesInfoRequest constructor.
     *
     * @param string $id
     */
    public function __construct($id)
    {
        $this->body['id'] = $id;
    }

    /**
     * {@inheritdoc}
     */
    public function getEndpoint(): string
    {
        return 'milestones.info';
    }
}
