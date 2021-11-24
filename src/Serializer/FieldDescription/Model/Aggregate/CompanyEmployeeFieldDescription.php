<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use QR\TeamleaderApiClient\Model\Aggregate\CompanyEmployee;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedDefinition;
use QR\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class CompanyEmployeeFieldDescription.
 */
class CompanyEmployeeFieldDescription extends FieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return string[]|array<string, array<string, class-string<\QR\TeamleaderApiClient\Model\Aggregate\LinkedDefinition>>>
     */
    protected function getFieldMapping(): array
    {
        return [
            'position',
            'decision_maker',
            'company' => ['target_class' => LinkedDefinition::class],
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\Aggregate\CompanyEmployee>
     */
    public function getTargetClass()
    {
        return CompanyEmployee::class;
    }
}
