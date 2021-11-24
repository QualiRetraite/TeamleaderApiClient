<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\Aggregate;

/**
 * Class LinkedCustomField.
 */
class LinkedCustomField
{
    private ?\QR\TeamleaderApiClient\Model\Aggregate\LinkedDefinition $definition = null;

    private ?string $value = null;

    public function getDefinition(): LinkedDefinition
    {
        return $this->definition;
    }

    public function setDefinition(LinkedDefinition $definition): void
    {
        $this->definition = $definition;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function setValue(string $value): void
    {
        $this->value = $value;
    }
}
