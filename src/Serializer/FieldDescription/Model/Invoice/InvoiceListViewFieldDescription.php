<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Invoice;

use QR\TeamleaderApiClient\Model\Aggregate\Invoicee;
use QR\TeamleaderApiClient\Model\Invoice\InvoiceListView;

/**
 * Class InvoiceListViewFieldDescription.
 */
class InvoiceListViewFieldDescription extends InvoiceFieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return mixed[]
     */
    protected function getFieldMapping(): array
    {
        $fields = [
            'invoicee' => ['target_class' => Invoicee::class],
        ];

        return array_merge(
            parent::getFieldMapping(),
            $fields
        );
    }

    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\Invoice\InvoiceListView>
     */
    public function getTargetClass()
    {
        return InvoiceListView::class;
    }
}
