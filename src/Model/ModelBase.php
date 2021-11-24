<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model;

/**
 * Class ModelBase.
 */
abstract class ModelBase
{
    private ?string $id = null;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }
}
