<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\PaymentTerm;

use QR\TeamleaderApiClient\Model\PaymentTerm\PaymentTermListView;

/**
 * Class PaymentTypeListViewFieldDescription.
 */
class PaymentTypeListViewFieldDescription extends PaymentTermFieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\PaymentTerm\PaymentTermListView>
     */
    public function getTargetClass()
    {
        return PaymentTermListView::class;
    }
}
