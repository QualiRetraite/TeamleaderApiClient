<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\General\Departments;

use QR\TeamleaderApiClient\Request\GetRequest;
use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class DepartmentsInfoRequest.
 */
class DepartmentsInfoRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * DepartmentsInfoRequest constructor.
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
        return 'departments.info';
    }
}
