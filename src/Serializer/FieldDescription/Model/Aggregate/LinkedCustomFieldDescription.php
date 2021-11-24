<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use QR\TeamleaderApiClient\Model\Aggregate\LinkedCustomField;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedDefinition;
use QR\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class LinkedCustomFieldDescription.
 */
class LinkedCustomFieldDescription extends FieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return string[]|array<string, array<string, class-string<\QR\TeamleaderApiClient\Model\Aggregate\LinkedDefinition>>>
     */
    protected function getFieldMapping(): array
    {
        return [
            'definition' => ['target_class' => LinkedDefinition::class],
            'value',
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\Aggregate\LinkedCustomField>
     */
    public function getTargetClass()
    {
        return LinkedCustomField::class;
    }
}
