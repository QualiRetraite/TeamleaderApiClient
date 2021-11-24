<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\Projects\Projects;

use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;
use QR\TeamleaderApiClient\Request\PostRequest;

/**
 * Class ProjectsCreateRequest.
 */
class ProjectsCreateRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * ProjectsCreateRequest constructor.
     *
     * @param mixed[] $project
     */
    public function __construct(array $project)
    {
        foreach ($project['milestones'] as $key => $milestone) {
            $project['milestones'][$key]['responsible_user_id'] =
                $project['milestones'][$key]['responsible_user']['id'];
            unset($project['milestones'][$key]['responsible_user']);
        }

        $this->body = $project;
    }

    /**
     * {@inheritdoc}
     */
    public function getEndpoint(): string
    {
        return 'projects.create';
    }
}
