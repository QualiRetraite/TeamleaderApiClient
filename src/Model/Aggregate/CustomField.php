<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\Aggregate;

use QR\TeamleaderApiClient\Model\ModelBase;

/**
 * Class CustomField.
 */
class CustomField extends ModelBase
{
    /**
     * @var
     */
    private $value;

    /**
     * @return mixed|null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value): void
    {
        $this->value = $value;
    }
}
