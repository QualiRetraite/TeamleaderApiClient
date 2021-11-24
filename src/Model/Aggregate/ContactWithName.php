<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\Aggregate;

/**
 * Class ContactWithName.
 */
class ContactWithName
{
    /**
     * ContactWithName constructor.
     *
     * @param string|null $name
     */
    public function __construct(private $name = null, private LinkedContact $contact = null)
    {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getContact(): LinkedContact
    {
        return $this->contact;
    }

    public function setContact(LinkedContact $contact): void
    {
        $this->contact = $contact;
    }
}
