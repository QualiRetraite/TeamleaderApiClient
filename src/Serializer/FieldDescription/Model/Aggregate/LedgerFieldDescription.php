<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use QR\TeamleaderApiClient\Model\Aggregate\Ledger;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedDepartment;
use QR\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class LedgerFieldDescription.
 */
class LedgerFieldDescription extends FieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return string[]|array<string, array<string, class-string<\QR\TeamleaderApiClient\Model\Aggregate\LinkedDepartment>>>
     */
    protected function getFieldMapping(): array
    {
        return [
            'department' => ['target_class' => LinkedDepartment::class],
            'ledger_account_number',
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\Aggregate\Ledger>
     */
    public function getTargetClass()
    {
        return Ledger::class;
    }
}
