<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Project;

use QR\TeamleaderApiClient\Model\Aggregate\LinkedCustomer;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedSource;
use QR\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class ProjectFieldDescriptionBase.
 */
abstract class ProjectFieldDescriptionBase extends FieldDescriptionBase
{
    /**
     * {@inheritdoc}
     */
    protected function getFieldMapping(): array
    {
        return [
            'id',
            'reference',
            'title',
            'description',
            'status',
            'customer' => ['target_class' => LinkedCustomer::class],
            'starts_on',
            'due_on',
            'source' => ['target_class' => LinkedSource::class],
        ];
    }
}
