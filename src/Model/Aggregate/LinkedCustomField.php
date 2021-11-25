<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\Aggregate;

/**
 * Class LinkedCustomField.
 */
class LinkedCustomField
{
    private ?LinkedDefinition $definition = null;

    private mixed $value = null;

    public function getDefinition(): ?LinkedDefinition
    {
        return $this->definition;
    }

    public function setDefinition(?LinkedDefinition $definition): void
    {
        $this->definition = $definition;
    }

    public function getValue(): mixed
    {
        return $this->value;
    }

    public function setValue(mixed $value): void
    {
        $this->value = $value;
    }
}
