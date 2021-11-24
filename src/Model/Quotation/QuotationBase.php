<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\Quotation;

use QR\TeamleaderApiClient\Model\Aggregate\GroupedLine;
use QR\TeamleaderApiClient\Model\Aggregate\LinkedDeal;
use QR\TeamleaderApiClient\Model\ModelBase;

/**
 * Class QuotationBase.
 */
abstract class QuotationBase extends ModelBase
{
    private ?\QR\TeamleaderApiClient\Model\Aggregate\LinkedDeal $deal = null;

    /**
     * @var GroupedLine[]
     */
    private ?array $groupedLines = null;

    public function getDeal(): LinkedDeal
    {
        return $this->deal;
    }

    public function setDeal(LinkedDeal $deal): void
    {
        $this->deal = $deal;
    }

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
