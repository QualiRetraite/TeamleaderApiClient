<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\Projects\Projects;

use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;
use QR\TeamleaderApiClient\Request\PostRequest;

/**
 * Class ProjectsUpdateRequest.
 */
class ProjectsUpdateRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * ProjectsUpdateRequest constructor.
     *
     * @param mixed[] $project
     */
    public function __construct(array $project)
    {
        unset(
            $project['reference'],
            $project['customer'],
            $project['due_on'],
            $project['source'],
            $project['milestones'],
            $project['participants']
        );

        $this->body = $project;
    }

    /**
     * {@inheritdoc}
     */
    public function getEndpoint(): string
    {
        return 'projects.update';
    }
}
