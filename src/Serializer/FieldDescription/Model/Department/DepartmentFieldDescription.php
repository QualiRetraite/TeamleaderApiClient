<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Department;

use QR\TeamleaderApiClient\Model\Aggregate\Address;
use QR\TeamleaderApiClient\Model\Aggregate\Email;
use QR\TeamleaderApiClient\Model\Aggregate\Telephone;
use QR\TeamleaderApiClient\Model\Department\Department;

/**
 * Class DepartmentFieldDescription.
 */
class DepartmentFieldDescription extends DepartmentFieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return mixed[]
     */
    protected function getFieldMapping(): array
    {
        $fields = [
            'address' => ['target_class' => Address::class.'[]'],
            'emails' => ['target_class' => Email::class.'[]'],
            'telephones' => ['target_class' => Telephone::class.'[]'],
            'website',
            'iban',
            'bic',
            'fiscal_regime',
        ];

        return array_merge(
            parent::getFieldMapping(),
            $fields
        );
    }

    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\Department\Department>
     */
    public function getTargetClass()
    {
        return Department::class;
    }
}
