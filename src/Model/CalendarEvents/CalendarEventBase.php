<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\CalendarEvents;

use QR\TeamleaderApiClient\Model\Aggregate\LinkedActivityType;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedContact;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedCustomer;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedTodo;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedUser;
use QR\TeamleaderApiClient\Model\ModelBase;

/**
 * Class CalendarEventBase.
 */
abstract class CalendarEventBase extends ModelBase
{
    private ?\QR\TeamleaderApiClient\Model\Aggregate\LinkedUser $creator = null;

    private ?\QR\TeamleaderApiClient\Model\Aggregate\LinkedTodo $todo = null;

    private ?\QR\TeamleaderApiClient\Model\Aggregate\LinkedActivityType $activityType = null;

    private string $title;

    private ?string $description = null;

    private ?\DateTime $startsAt = null;

    private ?\DateTime $endsAt = null;

    private ?string $location = null;

    /**
     * @var LinkedContact[]
     */
    private ?array $attendees = null;

    /**
     * @var LinkedCustomer[]
     */
    private ?array $links = null;

    /**
     * @param $title
     */
    public function create(string $title, LinkedActivityType $activityType): void
    {
        $this->title = $title;
        $this->activityType = $activityType;
    }

    public function getCreator(): LinkedUser
    {
        return $this->creator;
    }

    public function setCreator(LinkedUser $creator): void
    {
        $this->creator = $creator;
    }

    public function getTodo(): LinkedTodo
    {
        return $this->todo;
    }

    public function setTodo(LinkedTodo $todo): void
    {
        $this->todo = $todo;
    }

    public function getActivityType(): LinkedActivityType
    {
        return $this->activityType;
    }

    public function setActivityType(LinkedActivityType $activityType): void
    {
        $this->activityType = $activityType;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getStartsAt(): \DateTime
    {
        return $this->startsAt;
    }

    public function setStartsAt(\DateTime $startsAt): void
    {
        $this->startsAt = $startsAt;
    }

    public function getEndsAt(): \DateTime
    {
        return $this->endsAt;
    }

    public function setEndsAt(\DateTime $endsAt): void
    {
        $this->endsAt = $endsAt;
    }

    public function getLocation(): string
    {
        return $this->location;
    }

    public function setLocation(string $location): void
    {
        $this->location = $location;
    }

    /**
     * @return LinkedContact[]
     */
    public function getAttendees(): array
    {
        return $this->attendees;
    }

    /**
     * @param LinkedContact[] $attendees
     */
    public function setAttendees(array $attendees): void
    {
        $this->attendees = $attendees;
    }

    /**
     * @return LinkedCustomer[]
     */
    public function getLinks(): array
    {
        return $this->links;
    }

    /**
     * @param LinkedCustomer[] $links
     */
    public function setLinks(array $links): void
    {
        $this->links = $links;
    }
}
