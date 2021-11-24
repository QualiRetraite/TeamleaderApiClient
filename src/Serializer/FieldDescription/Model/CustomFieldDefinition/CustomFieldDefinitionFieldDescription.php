<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\CustomFieldDefinition;

use QR\TeamleaderApiClient\Model\CustomFieldDefinition\CustomFieldDefinition;

/**
 * Class CustomFieldDefinitionFieldDescription.
 */
class CustomFieldDefinitionFieldDescription extends CustomFieldDefinitionFieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\CustomFieldDefinition\CustomFieldDefinition>
     */
    public function getTargetClass()
    {
        return CustomFieldDefinition::class;
    }
}
