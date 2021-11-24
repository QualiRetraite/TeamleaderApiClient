<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\WithholdingTaxRate;

use QR\TeamleaderApiClient\Model\WithholdingTaxRate\WithholdingTaxRateListView;

/**
 * Class WithholdingTaxRateListViewFieldDescription.
 */
class WithholdingTaxRateListViewFieldDescription extends WithholdingTaxRateFieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\WithholdingTaxRate\WithholdingTaxRateListView>
     */
    public function getTargetClass()
    {
        return WithholdingTaxRateListView::class;
    }
}
