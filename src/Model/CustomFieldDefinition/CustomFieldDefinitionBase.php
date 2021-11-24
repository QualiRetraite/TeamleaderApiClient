<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\CustomFieldDefinition;

use QR\TeamleaderApiClient\Model\Aggregate\Configuration;
use QR\TeamleaderApiClient\Model\ModelBase;

/**
 * Class CustomFieldDefinitionBase.
 */
abstract class CustomFieldDefinitionBase extends ModelBase
{
    private ?string $context = null;

    private ?string $type = null;

    private ?string $label = null;

    private ?string $group = null;

    private ?bool $required = null;

    private \QR\TeamleaderApiClient\Model\Aggregate\Configuration $configuration = [];

    public function getContext(): string
    {
        return $this->context;
    }

    public function setContext(string $context): void
    {
        $this->context = $context;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    public function getGroup(): string
    {
        return $this->group;
    }

    public function setGroup(string $group): void
    {
        $this->group = $group;
    }

    public function isRequired(): bool
    {
        return $this->required;
    }

    public function setRequired(bool $required): void
    {
        $this->required = $required;
    }

    public function getConfiguration(): Configuration
    {
        return $this->configuration;
    }

    public function setConfiguration(Configuration $configuration): void
    {
        $this->configuration = $configuration;
    }
}
