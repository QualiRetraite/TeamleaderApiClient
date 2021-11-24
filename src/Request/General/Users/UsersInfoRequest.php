<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\General\Users;

use QR\TeamleaderApiClient\Request\GetRequest;
use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class UsersInfoRequest.
 */
class UsersInfoRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * UsersInfoRequest constructor.
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
        return 'users.info';
    }
}
