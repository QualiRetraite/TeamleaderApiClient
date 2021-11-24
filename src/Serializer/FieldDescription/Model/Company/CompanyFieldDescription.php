<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Company;

use QR\TeamleaderApiClient\Model\Aggregate\AddressWithType;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedCustomField;
use QR\TeamleaderApiClient\Model\Company\Company;

/**
 * Class CompanyFieldDescription.
 */
class CompanyFieldDescription extends CompanyFieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return mixed[]
     */
    protected function getFieldMapping(): array
    {
        $fields = [
            'addresses' => ['target_class' => AddressWithType::class.'[]'],
            'remarks',
            'custom_fields' => ['target_class' => LinkedCustomField::class.'[]'],
            'marketing_mails_consent',
        ];

        return array_merge(
            parent::getFieldMapping(),
            $fields
        );
    }

    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\Company\Company>
     */
    public function getTargetClass()
    {
        return Company::class;
    }
}
