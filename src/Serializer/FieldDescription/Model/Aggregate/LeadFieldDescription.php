<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use QR\TeamleaderApiClient\Model\Aggregate\Lead;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedContact;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedCustomer;
use QR\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class LeadFieldDescription.
 */
class LeadFieldDescription extends FieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return array<string, array<string, class-string<\QR\TeamleaderApiClient\Model\Aggregate\LinkedContact>|class-string|<|\QR\TeamleaderApiClient\Model\Aggregate\LinkedCustomer>>>
     */
    protected function getFieldMapping(): array
    {
        return [
            'customer' => ['target_class' => LinkedCustomer::class],
            'contact_person' => ['target_class' => LinkedContact::class],
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\Aggregate\Lead>
     */
    public function getTargetClass()
    {
        return Lead::class;
    }
}
