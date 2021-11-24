<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Deal;

use QR\TeamleaderApiClient\Model\Aggregate\EstimatedValue;
use QR\TeamleaderApiClient\Model\Aggregate\Lead;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedDepartment;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedSource;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedUser;
use QR\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class DealFieldDescriptionBase.
 */
abstract class DealFieldDescriptionBase extends FieldDescriptionBase
{
    /**
     * {@inheritdoc}
     */
    protected function getFieldMapping()
    {
        return [
            'id',
            'title',
            'summary',
            'reference',
            'status',
            'lead' => ['target_class' => Lead::class],
            'department' => ['target_class' => LinkedDepartment::class],
            'estimated_value' => ['target_class' => EstimatedValue::class],
            'estimated_closing_date',
            'estimated_probability',
            'responsible_user' => ['target_class' => LinkedUser::class],
            'closed_at' => ['target_class' => \DateTime::class],
            'source' => ['target_class' => LinkedSource::class],
            'created_at' => ['target_class' => \DateTime::class],
            'updated_at' => ['target_class' => \DateTime::class],
            'web_url',
        ];
    }
}
