<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\CreditNote;

use QR\TeamleaderApiClient\Model\Aggregate\GroupedLine;

/**
 * Class CreditNote.
 */
class CreditNote extends CreditNoteBase
{
    /**
     * @var GroupedLine[]
     */
    private ?array $groupedLines = null;

    /**
     * @return GroupedLine[]
     */
    public function getGroupedLines(): array
    {
        return $this->groupedLines;
    }

    /**
     * @param GroupedLine[] $groupedLines
     */
    public function setGroupedLines(array $groupedLines): void
    {
        $this->groupedLines = $groupedLines;
    }
}
