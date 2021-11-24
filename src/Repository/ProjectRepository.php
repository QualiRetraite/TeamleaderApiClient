<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Repository;

use QR\TeamleaderApiClient\Model\Aggregate\LinkedParticipantWithRole;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedProject;
use QR\TeamleaderApiClient\Model\Project\Project;
use QR\TeamleaderApiClient\Model\Project\ProjectListView;
use QR\TeamleaderApiClient\Request\Projects\Projects\ProjectsAddParticipantRequest;
use QR\TeamleaderApiClient\Request\Projects\Projects\ProjectsCreateRequest;
use QR\TeamleaderApiClient\Request\Projects\Projects\ProjectsDeleteRequest;
use QR\TeamleaderApiClient\Request\Projects\Projects\ProjectsInfoRequest;
use QR\TeamleaderApiClient\Request\Projects\Projects\ProjectsListRequest;
use QR\TeamleaderApiClient\Request\Projects\Projects\ProjectsUpdateParticipantRequest;
use QR\TeamleaderApiClient\Request\Projects\Projects\ProjectsUpdateRequest;

/**
 * Class ProjectRepository.
 */
class ProjectRepository extends RepositoryBase
{
    /**
     * @return ProjectListView[]
     *
     * @throws \Http\Client\Exception
     */
    public function listProjects(array $filters = [], array $page = [], array $sort = []): array
    {
        $request = new ProjectsListRequest();
        $request->setFilters($filters);
        $request->setPage($page);
        $request->setSort($sort);

        return $this->handleRequest(
            $request,
            ProjectListView::class.'[]'
        );
    }

    /**
     * @throws \Http\Client\Exception
     */
    public function getProject(string $id): Project
    {
        $request = new ProjectsInfoRequest($id);

        return $this->handleRequest(
            $request,
            Project::class
        );
    }

    /**
     * @throws \Http\Client\Exception
     */
    public function addProject(Project $project): LinkedProject
    {
        $request = new ProjectsCreateRequest($this->normalize($project));

        return $this->handleRequest(
            $request,
            LinkedProject::class
        );
    }

    /**
     * @throws \Http\Client\Exception
     */
    public function updateProject(Project $project): void
    {
        $request = new ProjectsUpdateRequest($this->normalize($project));

        $this->apiClient->handle($request);
    }

    /**
     * @throws \Http\Client\Exception
     */
    public function deleteProject(string $id): void
    {
        $request = new ProjectsDeleteRequest($id);

        $this->apiClient->handle($request);
    }

    /**
     * @throws \Http\Client\Exception
     */
    public function addParticipant(string $id, LinkedParticipantWithRole $linkedParticipantWithRole): void
    {
        $request = new ProjectsAddParticipantRequest($id, $this->normalize($linkedParticipantWithRole));

        $this->apiClient->handle($request);
    }

    /**
     * @throws \Http\Client\Exception
     */
    public function updateParticipant(string $id, LinkedParticipantWithRole $linkedParticipantWithRole): void
    {
        $request = new ProjectsUpdateParticipantRequest($id, $this->normalize($linkedParticipantWithRole));

        $this->apiClient->handle($request);
    }
}
