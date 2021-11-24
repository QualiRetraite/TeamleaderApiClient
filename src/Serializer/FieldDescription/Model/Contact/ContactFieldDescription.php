<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Contact;

use QR\TeamleaderApiClient\Model\Aggregate\AddressWithType;
use QR\TeamleaderApiClient\Model\Aggregate\CompanyEmployee;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedCustomField;
use QR\TeamleaderApiClient\Model\Contact\Contact;

/**
 * Class ContactFieldDescription.
 */
class ContactFieldDescription extends ContactFieldDescriptionBase
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
            'companies' => ['target_class' => CompanyEmployee::class.'[]'],
            'remarks',
            'custom_fields' => ['target_class' => LinkedCustomField::class.'[]'],
            'marketing_mails_consent' => ['getter' => 'hasMarketingMailsConsent'],
        ];

        return array_merge(
            parent::getFieldMapping(),
            $fields
        );
    }

    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\Contact\Contact>
     */
    public function getTargetClass()
    {
        return Contact::class;
    }
}
