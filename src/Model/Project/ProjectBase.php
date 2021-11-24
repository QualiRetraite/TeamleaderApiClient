<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\Project;

use QR\TeamleaderApiClient\Model\Aggregate\LinkedCustomer;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedSource;
use QR\TeamleaderApiClient\Model\ModelBase;

/**
 * Class ProjectBase.
 */
abstract class ProjectBase extends ModelBase
{
    private ?string $reference = null;

    private ?string $status = null;

    private ?string $dueOn = null;

    private ?\QR\TeamleaderApiClient\Model\Aggregate\LinkedSource $source = null;

    /**
     * ProjectBase constructor.
     *
     * @param string|null $title
     * @param string|null $description
     * @param string|null $startsOn
     */
    public function __construct(private $title = null, private $description = null, private $startsOn = null, private LinkedCustomer $customer = null)
    {
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    public function setReference(string $reference): void
    {
        $this->reference = $reference;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * @return LinkedCustomer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    public function setCustomer(LinkedCustomer $customer): void
    {
        $this->customer = $customer;
    }

    /**
     * @return string
     */
    public function getStartsOn()
    {
        return $this->startsOn;
    }

    public function setStartsOn(string $startsOn): void
    {
        $this->startsOn = $startsOn;
    }

    /**
     * @return string
     */
    public function getDueOn()
    {
        return $this->dueOn;
    }

    public function setDueOn(string $dueOn): void
    {
        $this->dueOn = $dueOn;
    }

    /**
     * @return LinkedSource
     */
    public function getSource()
    {
        return $this->source;
    }

    public function setSource(LinkedSource $source): void
    {
        $this->source = $source;
    }
}
