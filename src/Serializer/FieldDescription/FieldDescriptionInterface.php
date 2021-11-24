<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription;

/**
 * Interface FieldDescriptionInterface.
 */
interface FieldDescriptionInterface
{
    /**
     * @return Field[]
     */
    public function getFields();

    /**
     * @return string
     */
    public function getTargetClass();
}
