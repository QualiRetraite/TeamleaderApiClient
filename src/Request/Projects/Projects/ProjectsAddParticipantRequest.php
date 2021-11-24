<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\Projects\Projects;

use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;
use QR\TeamleaderApiClient\Request\PostRequest;

/**
 * Class ProjectsAddParticipantRequest.
 */
class ProjectsAddParticipantRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * ProjectsAddParticipantRequest constructor.
     *
     * @param string  $id
     * @param mixed[] $participantWithRole
     */
    public function __construct($id, array $participantWithRole)
    {
        $this->body = $participantWithRole;
        $this->body['id'] = $id;
    }

    /**
     * {@inheritdoc}
     */
    public function getEndpoint(): string
    {
        return 'projects.addParticipant';
    }
}
