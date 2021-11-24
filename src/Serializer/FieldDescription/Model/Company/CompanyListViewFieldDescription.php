<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Company;

use QR\TeamleaderApiClient\Model\Aggregate\Address;
use QR\TeamleaderApiClient\Model\Company\CompanyListView;

/**
 * Class CompanyListViewFieldDescription.
 */
class CompanyListViewFieldDescription extends CompanyFieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return mixed[]
     */
    protected function getFieldMapping(): array
    {
        $fields = [
            'primary_address' => ['target_class' => Address::class],
        ];

        return array_merge(
            parent::getFieldMapping(),
            $fields
        );
    }

    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\Company\CompanyListView>
     */
    public function getTargetClass()
    {
        return CompanyListView::class;
    }
}
