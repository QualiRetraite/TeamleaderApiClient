<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\Projects\Milestones;

use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;
use QR\TeamleaderApiClient\Request\PostRequest;

/**
 * Class MilestonesCreateRequest.
 */
class MilestonesCreateRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * MilestonesCreateRequest constructor.
     *
     * @param mixed[] $milestone
     */
    public function __construct(array $milestone)
    {
        $milestone['project_id'] = $milestone['project']['id'];
        $milestone['responsible_user_id'] = $milestone['responsible_user']['id'];

        unset(
            $milestone['project'],
            $milestone['responsible_user']
        );

        $this->body = $milestone;
    }

    /**
     * {@inheritdoc}
     */
    public function getEndpoint(): string
    {
        return 'milestones.create';
    }
}
