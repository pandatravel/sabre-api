<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemFOPQualifiersMultipleCCFOPCCOne extends AbstractModel
{
    /**
     * @var TicketingItemFOPQualifiersMultipleCCFOPCCOneCCInfo
     */
    protected $cCInfo;

    /**
     * @return TicketingItemFOPQualifiersMultipleCCFOPCCOneCCInfo
     */
    public function getCCInfo(): ?TicketingItemFOPQualifiersMultipleCCFOPCCOneCCInfo
    {
        return $this->cCInfo;
    }

    /**
     * @param TicketingItemFOPQualifiersMultipleCCFOPCCOneCCInfo $cCInfo
     *
     * @return self
     */
    public function setCCInfo(?TicketingItemFOPQualifiersMultipleCCFOPCCOneCCInfo $cCInfo): self
    {
        $this->cCInfo = $cCInfo;

        return $this;
    }
}
