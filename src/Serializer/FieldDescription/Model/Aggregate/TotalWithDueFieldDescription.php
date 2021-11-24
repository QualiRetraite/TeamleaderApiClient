<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use QR\TeamleaderApiClient\Model\Aggregate\PaymentAmount;
use QR\TeamleaderApiClient\Model\Aggregate\TotalWithDue;

/**
 * Class TotalWithDueFieldDescription.
 */
class TotalWithDueFieldDescription extends TotalFieldDescription
{
    /**
     * {@inheritdoc}
     *
     * @return mixed[]
     */
    protected function getFieldMapping(): array
    {
        $fields = [
            'due' => ['target_class' => PaymentAmount::class],
        ];

        return array_merge(
            parent::getFieldMapping(),
            $fields
        );
    }

    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\Aggregate\TotalWithDue>
     */
    public function getTargetClass()
    {
        return TotalWithDue::class;
    }
}
