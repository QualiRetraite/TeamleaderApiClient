<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use QR\TeamleaderApiClient\Model\Aggregate\PaymentAmount;
use QR\TeamleaderApiClient\Model\Aggregate\PaymentWithDate;
use QR\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class PaymentWithDateFieldDescription.
 */
class PaymentWithDateFieldDescription extends FieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return array<string, array<string, class-string<\DateTime>|class-string|<|\QR\TeamleaderApiClient\Model\Aggregate\PaymentAmount>>>
     */
    protected function getFieldMapping(): array
    {
        return [
            'paid_at' => ['target_class' => \DateTime::class],
            'payment' => ['target_class' => PaymentAmount::class],
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\Aggregate\PaymentWithDate>
     */
    public function getTargetClass()
    {
        return PaymentWithDate::class;
    }
}
