<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\Deal;

use DateTime;
use QR\TeamleaderApiClient\Model\Aggregate\EstimatedValue;
use QR\TeamleaderApiClient\Model\Aggregate\Lead;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedDepartment;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedUser;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedSource;
use QR\TeamleaderApiClient\Model\ModelBase;

/**
 * Class DealBase.
 */
abstract class DealBase extends ModelBase
{
    private ?string $title = null;

    /**
     * @var string
     */
    private $summary;

    private ?string $reference = null;

    private ?string $status = null;

    private ?\QR\TeamleaderApiClient\Model\Aggregate\Lead $lead = null;

    private ?\QR\TeamleaderApiClient\Model\Aggregate\LinkedDepartment $department = null;

    private ?\QR\TeamleaderApiClient\Model\Aggregate\EstimatedValue $estimatedValue = null;

    private ?string $estimatedClosingDate = null;

    private ?float $estimatedProbability = null;

    private ?\QR\TeamleaderApiClient\Model\Aggregate\LinkedUser $responsibleUser = null;

    private ?\DateTime $closedAt = null;

    private ?\QR\TeamleaderApiClient\Model\Aggregate\LinkedSource $source = null;

    private ?\DateTime $createdAt = null;

    private ?\DateTime $updatedAt = null;

    private ?string $webUrl = null;

    public function create(Lead $lead, string $title): void
    {
        $this->lead = $lead;
        $this->title = $title;
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
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @param string $reference
     */
    public function setSummary(string $summary): void
    {
        $this->summary = $summary;
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
    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * @return Lead
     */
    public function getLead()
    {
        return $this->lead;
    }

    public function setLead(Lead $lead): void
    {
        $this->lead = $lead;
    }

    /**
     * @return LinkedDepartment
     */
    public function getDepartment()
    {
        return $this->department;
    }

    public function setDepartment(LinkedDepartment $department): void
    {
        $this->department = $department;
    }

    /**
     * @return EstimatedValue
     */
    public function getEstimatedValue()
    {
        return $this->estimatedValue;
    }

    public function setEstimatedValue(EstimatedValue $estimatedValue): void
    {
        $this->estimatedValue = $estimatedValue;
    }

    /**
     * @return string
     */
    public function getEstimatedClosingDate()
    {
        return $this->estimatedClosingDate;
    }

    public function setEstimatedClosingDate(string $estimatedClosingDate): void
    {
        $this->estimatedClosingDate = $estimatedClosingDate;
    }

    /**
     * @return float
     */
    public function getEstimatedProbability()
    {
        return $this->estimatedProbability;
    }

    public function setEstimatedProbability(float $estimatedProbability): void
    {
        $this->estimatedProbability = $estimatedProbability;
    }

    /**
     * @return LinkedUser
     */
    public function getResponsibleUser()
    {
        return $this->responsibleUser;
    }

    public function setResponsibleUser(LinkedUser $responsibleUser): void
    {
        $this->responsibleUser = $responsibleUser;
    }

    /**
     * @return DateTime
     */
    public function getClosedAt()
    {
        return $this->closedAt;
    }

    public function setClosedAt(DateTime $closedAt): void
    {
        $this->closedAt = $closedAt;
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

    /**
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(DateTime $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return string
     */
    public function getWebUrl()
    {
        return $this->webUrl;
    }

    public function setWebUrl(string $webUrl): void
    {
        $this->webUrl = $webUrl;
    }
}
