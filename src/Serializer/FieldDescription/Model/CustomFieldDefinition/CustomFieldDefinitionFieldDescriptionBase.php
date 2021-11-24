<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\CustomFieldDefinition;

use QR\TeamleaderApiClient\Model\Aggregate\Configuration;
use QR\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class CustomFieldDefinitionFieldDescriptionBase.
 */
abstract class CustomFieldDefinitionFieldDescriptionBase extends FieldDescriptionBase
{
    /**
     * {@inheritdoc}
     */
    protected function getFieldMapping(): array
    {
        return [
            'id',
            'context',
            'type',
            'label',
            'group',
            'required',
            'configuration' => ['target_class' => Configuration::class],
        ];
    }
}
