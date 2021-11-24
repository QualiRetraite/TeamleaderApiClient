<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\Projects\Projects;

use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;
use QR\TeamleaderApiClient\Request\PostRequest;

/**
 * Class ProjectsDeleteRequest.
 */
class ProjectsDeleteRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * ProjectsDeleteRequest constructor.
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
        return 'projects.delete';
    }
}
