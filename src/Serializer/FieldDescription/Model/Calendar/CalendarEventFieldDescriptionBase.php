<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Calendar;

use QR\TeamleaderApiClient\Model\Aggregate\LinkedActivityType;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedContact;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedCustomer;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedTodo;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedUser;
use QR\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class CalendarEventFieldDescriptionBase.
 */
abstract class CalendarEventFieldDescriptionBase extends FieldDescriptionBase
{
    /**
     * {@inheritdoc}
     */
    protected function getFieldMapping()
    {
        return [
            'id',
            'creator' => ['target_class' => LinkedUser::class],
            'todo' => ['target_class' => LinkedTodo::class],
            'activity_type' => ['target_class' => LinkedActivityType::class],
            'title',
            'description',
            'starts_at' => ['target_class' => \DateTime::class],
            'ends_at' => ['target_class' => \DateTime::class],
            'location',
            'attendees' => ['target_class' => LinkedContact::class.'[]'],
            'links' => ['target_class' => LinkedCustomer::class.'[]'],
        ];
    }
}
