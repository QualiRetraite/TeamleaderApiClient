<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use QR\TeamleaderApiClient\Model\Aggregate\GroupedLine;
use QR\TeamleaderApiClient\Model\Aggregate\LineItem;
use QR\TeamleaderApiClient\Model\Aggregate\Section;
use QR\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class GroupedLineFieldDescription.
 */
class GroupedLineFieldDescription extends FieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return array<string, array<string, string|class-string<\QR\TeamleaderApiClient\Model\Aggregate\Section>>>
     */
    protected function getFieldMapping(): array
    {
        return [
            'section' => ['target_class' => Section::class],
            'line_items' => ['target_class' => LineItem::class.'[]'],
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\Aggregate\GroupedLine>
     */
    public function getTargetClass()
    {
        return GroupedLine::class;
    }
}
