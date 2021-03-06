<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription;

/**
 * Class Field.
 */
class Field
{
    /**
     * Field constructor.
     *
     * @param string      $name
     * @param string|null $targetClass
     * @param string|null $setter
     * @param string|null $getter
     */
    public function __construct(
        private string $name,
        private ?string $getter = null,
        private ?string $setter = null,
        private ?string $targetClass = null
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getTargetClass(): ?string
    {
        return $this->targetClass;
    }

    public function getSetter(): ?string
    {
        return $this->setter;
    }

    public function getGetter(): ?string
    {
        return $this->getter;
    }
}
