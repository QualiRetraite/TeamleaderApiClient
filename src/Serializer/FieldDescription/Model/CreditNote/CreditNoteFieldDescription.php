<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\CreditNote;

use QR\TeamleaderApiClient\Model\Aggregate\GroupedLine;
use QR\TeamleaderApiClient\Model\CreditNote\CreditNote;

/**
 * Class CreditNoteFieldDescription.
 */
class CreditNoteFieldDescription extends CreditNoteFieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return mixed[]
     */
    protected function getFieldMapping(): array
    {
        $fields = [
            'grouped_lines' => ['target_class' => GroupedLine::class.'[]'],
        ];

        return array_merge(
            parent::getFieldMapping(),
            $fields
        );
    }

    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\CreditNote\CreditNote>
     */
    public function getTargetClass()
    {
        return CreditNote::class;
    }
}
