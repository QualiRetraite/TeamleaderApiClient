<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\Deal;

use QR\TeamleaderApiClient\Model\Aggregate\LinkedPhase;

/**
 * Class DealListView.
 */
class DealListView extends DealBase
{
    private ?\QR\TeamleaderApiClient\Model\Aggregate\LinkedPhase $currentPhase = null;

    public function getCurrentPhase(): LinkedPhase
    {
        return $this->currentPhase;
    }

    public function setCurrentPhase(LinkedPhase $currentPhase): void
    {
        $this->currentPhase = $currentPhase;
    }
}
