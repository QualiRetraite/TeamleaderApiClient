<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Contact;

use DateTime;
use QR\TeamleaderApiClient\Model\Aggregate\Email;
use QR\TeamleaderApiClient\Model\Aggregate\PaymentTerm;
use QR\TeamleaderApiClient\Model\Aggregate\Telephone;
use QR\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class ContactFieldDescriptionBase.
 */
abstract class ContactFieldDescriptionBase extends FieldDescriptionBase
{
    /**
     * {@inheritdoc}
     */
    protected function getFieldMapping()
    {
        return [
            'id',
            'first_name',
            'last_name',
            'salutation',
            'emails' => ['target_class' => Email::class.'[]'],
            'telephones' => ['target_class' => Telephone::class.'[]'],
            'website',
            'gender',
            'birthdate' => ['target_class' => DateTime::class],
            'iban',
            'bic',
            'language',
            'payment_term' => ['target_class' => PaymentTerm::class],
            'tags',
            'added_at' => ['target_class' => DateTime::class],
            'updated_at' => ['target_class' => DateTime::class],
            'web_url',
        ];
    }
}
