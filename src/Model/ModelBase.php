<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model;

/**
 * Class ModelBase.
 */
abstract class ModelBase
{
    private ?string $id = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): void
    {
        $this->id = $id;
    }
}
