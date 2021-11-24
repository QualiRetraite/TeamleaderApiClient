<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\Projects\Projects;

use QR\TeamleaderApiClient\Request\GetRequest;
use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class ProjectsInfoRequest.
 */
class ProjectsInfoRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * ProjectsInfoRequest constructor.
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
        return 'projects.info';
    }
}
