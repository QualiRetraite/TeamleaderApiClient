<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use QR\TeamleaderApiClient\Model\Aggregate\Section;
use QR\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class SectionFieldDescription.
 */
class SectionFieldDescription extends FieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return string[]
     */
    protected function getFieldMapping(): array
    {
        return [
            'title',
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\Aggregate\Section>
     */
    public function getTargetClass()
    {
        return Section::class;
    }
}
