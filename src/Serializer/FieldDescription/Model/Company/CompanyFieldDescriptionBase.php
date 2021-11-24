<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Company;

use QR\TeamleaderApiClient\Model\Aggregate\LinkedBusinessType;
use QR\TeamleaderApiClient\Model\Aggregate\Email;
use QR\TeamleaderApiClient\Model\Aggregate\InvoicingPreference;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedUser;
use QR\TeamleaderApiClient\Model\Aggregate\PaymentTerm;
use QR\TeamleaderApiClient\Model\Aggregate\Telephone;
use QR\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class CompanyFieldDescriptionBase.
 */
abstract class CompanyFieldDescriptionBase extends FieldDescriptionBase
{
    /**
     * {@inheritdoc}
     */
    protected function getFieldMapping()
    {
        return [
            'id',
            'name',
            'business_type' => ['target_class' => LinkedBusinessType::class],
            'vat_number',
            'national_identification_number',
            'emails' => ['target_class' => Email::class.'[]'],
            'telephones' => ['target_class' => Telephone::class.'[]'],
            'website',
            'iban',
            'bic',
            'language',
            'preferred_currency',
            'payment_term' => ['target_class' => PaymentTerm::class],
            'invoicing_preferences' => ['target_class' => InvoicingPreference::class],
            'responsible_user' => ['target_class' => LinkedUser::class],
            'added_at' => ['target_class' => \DateTime::class],
            'updated_at' => ['target_class' => \DateTime::class],
            'web_url',
            'tags',
        ];
    }
}
