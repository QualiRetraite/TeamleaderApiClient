<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\General\CustomFieldDefinition;

use QR\TeamleaderApiClient\Request\GetRequest;
use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class CustomFieldDefinitionInfoRequest.
 */
class CustomFieldDefinitionInfoRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * CustomFieldDefinitionInfoRequest constructor.
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
        return 'customFieldDefinitions.info';
    }
}
