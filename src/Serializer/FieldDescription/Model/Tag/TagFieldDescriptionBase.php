<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Tag;

use QR\TeamleaderApiClient\Model\Tag\TagBase;
use QR\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class TagFieldDescriptionBase.
 */
abstract class TagFieldDescriptionBase extends FieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return string[]
     */
    protected function getFieldMapping(): array
    {
        return [
            'tag',
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\Tag\TagBase>
     */
    public function getTargetClass()
    {
        return TagBase::class;
    }
}
