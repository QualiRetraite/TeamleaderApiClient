<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\LostReason;

use QR\TeamleaderApiClient\Model\ModelBase;

/**
 * Class LostReasonBase.
 */
abstract class LostReasonBase extends ModelBase
{
    private ?string $name = null;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
}
