<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Quotation;

use QR\TeamleaderApiClient\Model\Quotation\Quotation;

/**
 * Class QuotationFieldDescription.
 */
class QuotationFieldDescription extends QuotationFieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\Quotation\Quotation>
     */
    public function getTargetClass()
    {
        return Quotation::class;
    }
}
