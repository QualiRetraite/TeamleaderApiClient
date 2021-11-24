<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Calendar;

use QR\TeamleaderApiClient\Model\CalendarEvents\CalendarEventListView;

/**
 * Class CalendarListViewEventFieldDescription.
 */
class CalendarListViewEventFieldDescription extends CalendarEventFieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\CalendarEvents\CalendarEventListView>
     */
    public function getTargetClass()
    {
        return CalendarEventListView::class;
    }
}
