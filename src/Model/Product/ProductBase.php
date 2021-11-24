<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\Product;

use QR\TeamleaderApiClient\Model\Aggregate\Translation;
use QR\TeamleaderApiClient\Model\ModelBase;

/**
 * Class ProductBase.
 */
abstract class ProductBase extends ModelBase
{
    /**
     * @var Translation[]
     */
    private ?array $translations = null;

    private ?string $externalId = null;

    /**
     * @return Translation[]
     */
    public function getTranslations(): array
    {
        return $this->translations;
    }

    /**
     * @param Translation[] $translations
     */
    public function setTranslations(array $translations): void
    {
        $this->translations = $translations;
    }

    public function getExternalId(): string
    {
        return $this->externalId;
    }

    public function setExternalId(string $externalId): void
    {
        $this->externalId = $externalId;
    }
}
