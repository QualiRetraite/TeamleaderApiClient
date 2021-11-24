<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Contact;

use QR\TeamleaderApiClient\Model\Aggregate\Address;
use QR\TeamleaderApiClient\Model\Contact\ContactListView;

/**
 * Class ContactListViewFieldDescription.
 */
class ContactListViewFieldDescription extends ContactFieldDescriptionBase
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
     * @return class-string<\QR\TeamleaderApiClient\Model\Contact\ContactListView>
     */
    public function getTargetClass()
    {
        return ContactListView::class;
    }
}
