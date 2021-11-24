<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\Projects\Milestones;

use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;
use QR\TeamleaderApiClient\Request\PostRequest;

/**
 * Class MilestoneUpdateRequest.
 */
class MilestoneUpdateRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * MilestoneUpdateRequest constructor.
     *
     * @param mixed[] $milestone
     */
    public function __construct(array $milestone)
    {
        $milestone['responsible_user_id'] = $milestone['responsible_user']['id'];

        unset(
            $milestone['project'],
            $milestone['status'],
            $milestone['responsible_user']
        );

        $this->body = $milestone;
    }

    /**
     * {@inheritdoc}
     */
    public function getEndpoint(): string
    {
        return 'milestones.update';
    }
}
