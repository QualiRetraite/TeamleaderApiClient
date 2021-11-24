<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Deal;

use QR\TeamleaderApiClient\Model\Aggregate\LinkedCustomField;
use QR\TeamleaderApiClient\Model\Aggregate\PhaseHistory;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedQuotation;
use QR\TeamleaderApiClient\Model\Deal\Deal;

/**
 * Class DealFieldDescription.
 */
class DealFieldDescription extends DealFieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return mixed[]
     */
    protected function getFieldMapping(): array
    {
        $fields = [
            'phase_history' => ['target_class' => PhaseHistory::class.'[]'],
            'quotations' => ['target_class' => LinkedQuotation::class.'[]'],
            'custom_fields' => ['target_class' => LinkedCustomField::class.'[]'],
        ];

        return array_merge(
            parent::getFieldMapping(),
            $fields
        );
    }

    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\Deal\Deal>
     */
    public function getTargetClass()
    {
        return Deal::class;
    }
}
