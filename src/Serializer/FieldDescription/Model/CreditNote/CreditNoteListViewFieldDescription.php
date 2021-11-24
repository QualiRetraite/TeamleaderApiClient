<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\CreditNote;

use QR\TeamleaderApiClient\Model\CreditNote\CreditNoteListView;

/**
 * Class CreditNoteListViewFieldDescription.
 */
class CreditNoteListViewFieldDescription extends CreditNoteFieldDescriptionBase
{
    /**
     * @return string
     */
    public function getTargetClass()
    {
        return CreditNoteListView::class;
    }
}
