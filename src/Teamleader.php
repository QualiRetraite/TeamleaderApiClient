<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient;

use QR\TeamleaderApiClient\Http\ApiClient\ApiClientInterface;
use QR\TeamleaderApiClient\Repository\ActivityTypeRepository;
use QR\TeamleaderApiClient\Repository\BusinessTypeRepository;
use QR\TeamleaderApiClient\Repository\CalendarEventRepository;
use QR\TeamleaderApiClient\Repository\CompanyRepository;
use QR\TeamleaderApiClient\Repository\ContactRepository;
use QR\TeamleaderApiClient\Repository\CreditNoteRepository;
use QR\TeamleaderApiClient\Repository\CustomFieldDefinitionRepository;
use QR\TeamleaderApiClient\Repository\DealPhaseRepository;
use QR\TeamleaderApiClient\Repository\DealRepository;
use QR\TeamleaderApiClient\Repository\DealSourceRepository;
use QR\TeamleaderApiClient\Repository\DepartmentRepository;
use QR\TeamleaderApiClient\Repository\InvoiceRepository;
use QR\TeamleaderApiClient\Repository\LevelTwoAreaRepository;
use QR\TeamleaderApiClient\Repository\MilestoneRepository;
use QR\TeamleaderApiClient\Repository\PaymentTermRepository;
use QR\TeamleaderApiClient\Repository\ProductCategoryRepository;
use QR\TeamleaderApiClient\Repository\ProductRepository;
use QR\TeamleaderApiClient\Repository\ProjectRepository;
use QR\TeamleaderApiClient\Repository\QuotationRepository;
use QR\TeamleaderApiClient\Repository\TagRepository;
use QR\TeamleaderApiClient\Repository\TaxRateRepository;
use QR\TeamleaderApiClient\Repository\TimerRepository;
use QR\TeamleaderApiClient\Repository\TimeTrackingRepository;
use QR\TeamleaderApiClient\Repository\UserRepository;
use QR\TeamleaderApiClient\Repository\WebhookRepository;
use QR\TeamleaderApiClient\Repository\WithholdingTaxRateRepository;
use QR\TeamleaderApiClient\Repository\WorkOrderRepository;
use QR\TeamleaderApiClient\Repository\WorkTypeRepository;
use QR\TeamleaderApiClient\Serializer\SerializerFactory;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * Class Teamleader.
 */
class Teamleader
{
    /**
     * Teamleader constructor.
     *
     * @param SerializerInterface&NormalizerInterface $serializer
     */
    public function __construct(private ApiClientInterface $apiClient, private SerializerInterface $serializer)
    {
    }

    public static function withDefaultSerializer(ApiClientInterface $apiClient): static
    {
        return new static($apiClient, SerializerFactory::create());
    }

    public function departments(): DepartmentRepository
    {
        return new DepartmentRepository($this->apiClient, $this->serializer);
    }

    public function users(): UserRepository
    {
        return new UserRepository($this->apiClient, $this->serializer);
    }

    public function customFieldDefinition(): CustomFieldDefinitionRepository
    {
        return new CustomFieldDefinitionRepository($this->apiClient, $this->serializer);
    }

    public function workTypes(): WorkTypeRepository
    {
        return new WorkTypeRepository($this->apiClient, $this->serializer);
    }

    public function contacts(): ContactRepository
    {
        return new ContactRepository($this->apiClient, $this->serializer);
    }

    public function companies(): CompanyRepository
    {
        return new CompanyRepository($this->apiClient, $this->serializer);
    }

    public function businessTypes(): BusinessTypeRepository
    {
        return new BusinessTypeRepository($this->apiClient, $this->serializer);
    }

    public function tags(): TagRepository
    {
        return new TagRepository($this->apiClient, $this->serializer);
    }

    public function deals(): DealRepository
    {
        return new DealRepository($this->apiClient, $this->serializer);
    }

    public function dealPhases(): DealPhaseRepository
    {
        return new DealPhaseRepository($this->apiClient, $this->serializer);
    }

    public function dealSources(): DealSourceRepository
    {
        return new DealSourceRepository($this->apiClient, $this->serializer);
    }

    public function quotations(): QuotationRepository
    {
        return new QuotationRepository($this->apiClient, $this->serializer);
    }

    public function calendarEvents(): CalendarEventRepository
    {
        return new CalendarEventRepository($this->apiClient, $this->serializer);
    }

    public function activityTypes(): ActivityTypeRepository
    {
        return new ActivityTypeRepository($this->apiClient, $this->serializer);
    }

    public function invoices(): InvoiceRepository
    {
        return new InvoiceRepository($this->apiClient, $this->serializer);
    }

    public function creditNotes(): CreditNoteRepository
    {
        return new CreditNoteRepository($this->apiClient, $this->serializer);
    }

    public function paymentTerms(): PaymentTermRepository
    {
        return new PaymentTermRepository($this->apiClient, $this->serializer);
    }

    public function taxRates(): TaxRateRepository
    {
        return new TaxRateRepository($this->apiClient, $this->serializer);
    }

    public function withholdingTaxRates(): WithholdingTaxRateRepository
    {
        return new WithholdingTaxRateRepository($this->apiClient, $this->serializer);
    }

    public function productCategories(): ProductCategoryRepository
    {
        return new ProductCategoryRepository($this->apiClient, $this->serializer);
    }

    public function products(): ProductRepository
    {
        return new ProductRepository($this->apiClient, $this->serializer);
    }

    public function projects(): ProjectRepository
    {
        return new ProjectRepository($this->apiClient, $this->serializer);
    }

    public function milestones(): MilestoneRepository
    {
        return new MilestoneRepository($this->apiClient, $this->serializer);
    }

    public function timeTracking(): TimeTrackingRepository
    {
        return new TimeTrackingRepository($this->apiClient, $this->serializer);
    }

    public function timers(): TimerRepository
    {
        return new TimerRepository($this->apiClient, $this->serializer);
    }

    public function webhooks(): WebhookRepository
    {
        return new WebhookRepository($this->apiClient, $this->serializer);
    }

    public function levelTwoAreas(): LevelTwoAreaRepository
    {
        return new LevelTwoAreaRepository($this->apiClient, $this->serializer);
    }

    public function workOrders(): WorkOrderRepository
    {
        return new WorkOrderRepository($this->apiClient, $this->serializer);
    }
}
