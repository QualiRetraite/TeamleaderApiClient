<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\TaxRate;

use QR\TeamleaderApiClient\Model\TaxRate\TaxRateListView;

/**
 * Class TaxRateListViewFieldDescription.
 */
class TaxRateListViewFieldDescription extends TaxRateFieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\TaxRate\TaxRateListView>
     */
    public function getTargetClass()
    {
        return TaxRateListView::class;
    }
}
