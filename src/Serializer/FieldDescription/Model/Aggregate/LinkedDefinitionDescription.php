<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use QR\TeamleaderApiClient\Model\Aggregate\LinkedDefinition;
use QR\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class LinkedDefinitionDescription.
 */
class LinkedDefinitionDescription extends FieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return string[]
     */
    protected function getFieldMapping(): array
    {
        return [
            'type',
            'id',
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\Aggregate\LinkedDefinition>
     */
    public function getTargetClass()
    {
        return LinkedDefinition::class;
    }
}
