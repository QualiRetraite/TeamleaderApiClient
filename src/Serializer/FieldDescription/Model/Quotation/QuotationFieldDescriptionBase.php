<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Quotation;

use QR\TeamleaderApiClient\Model\Aggregate\GroupedLine;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedDeal;
use QR\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class QuotationFieldDescriptionBase.
 */
abstract class QuotationFieldDescriptionBase extends FieldDescriptionBase
{
    /**
     * {@inheritdoc}
     */
    protected function getFieldMapping()
    {
        return [
            'id',
            'deal' => ['target_class' => LinkedDeal::class],
            'grouped_lines' => ['target_class' => GroupedLine::class.'[]'],
        ];
    }
}
