<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\CustomFieldDefinition;

use QR\TeamleaderApiClient\Model\CustomFieldDefinition\CustomFieldDefinitionListView;

/**
 * Class CustomFieldDefinitionListViewFieldDescription.
 */
class CustomFieldDefinitionListViewFieldDescription extends CustomFieldDefinitionFieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\CustomFieldDefinition\CustomFieldDefinitionListView>
     */
    public function getTargetClass()
    {
        return CustomFieldDefinitionListView::class;
    }
}
