<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\General\Users;

use QR\TeamleaderApiClient\Request\GetRequest;
use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class UsersMeRequest.
 */
class UsersMeRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * {@inheritdoc}
     */
    public function getEndpoint(): string
    {
        return 'users.me';
    }
}
