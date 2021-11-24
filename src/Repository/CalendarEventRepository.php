<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Repository;

use QR\TeamleaderApiClient\Model\Aggregate\LinkedEvent;
use QR\TeamleaderApiClient\Model\CalendarEvents\CalendarEvent;
use QR\TeamleaderApiClient\Model\CalendarEvents\CalendarEventListView;
use QR\TeamleaderApiClient\Request\Calendar\CalendarEvents\CalendarEventsCancelRequest;
use QR\TeamleaderApiClient\Request\Calendar\CalendarEvents\CalendarEventsCreateRequest;
use QR\TeamleaderApiClient\Request\Calendar\CalendarEvents\CalendarEventsInfoRequest;
use QR\TeamleaderApiClient\Request\Calendar\CalendarEvents\CalendarEventsListRequest;
use QR\TeamleaderApiClient\Request\Calendar\CalendarEvents\CalendarEventsUpdateRequest;

/**
 * Class CalendarEventRepository.
 */
class CalendarEventRepository extends RepositoryBase
{
    /**
     * @throws \Http\Client\Exception
     */
    public function getCalendarEvent(string $id): CalendarEvent
    {
        $request = new CalendarEventsInfoRequest($id);

        return $this->handleRequest(
            $request,
            CalendarEvent::class
        );
    }

    /**
     * @return CalendarEventListView[]
     *
     * @throws \Http\Client\Exception
     */
    public function listCalendarEvents(array $filters = [], array $page = [], array $sort = []): array
    {
        $request = new CalendarEventsListRequest();
        $request->setFilters($filters);
        $request->setPage($page);
        $request->setSort($sort);

        return $this->handleRequest(
            $request,
            CalendarEventListView::class.'[]'
        );
    }

    /**
     * @throws \Http\Client\Exception
     */
    public function addCalendarEvent(CalendarEvent $calendarEvent): LinkedEvent
    {
        $request = new CalendarEventsCreateRequest($this->normalize($calendarEvent));

        return $this->handleRequest(
            $request,
            LinkedEvent::class
        );
    }

    /**
     * @throws \Http\Client\Exception
     */
    public function updateCalendarEvent(CalendarEvent $calendarEvent): void
    {
        $request = new CalendarEventsUpdateRequest($this->normalize($calendarEvent));

        $this->apiClient->handle($request);
    }

    /**
     * @throws \Http\Client\Exception
     */
    public function cancelCalendarEvent(string $id): void
    {
        $request = new CalendarEventsCancelRequest($id);

        $this->apiClient->handle($request);
    }
}
