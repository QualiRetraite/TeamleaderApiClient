<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use QR\TeamleaderApiClient\Model\Aggregate\LinkedCompany;
use QR\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class LinkedCompanyFieldDescription.
 */
class LinkedCompanyFieldDescription extends FieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return string[]
     */
    protected function getFieldMapping(): array
    {
        return [
            'id',
            'type',
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\Aggregate\LinkedCompany>
     */
    public function getTargetClass()
    {
        return LinkedCompany::class;
    }
}
