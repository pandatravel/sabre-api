<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemFOPQualifiersMultipleCCFOPCCTwo extends AbstractModel
{
    /**
     * @var TicketingItemFOPQualifiersMultipleCCFOPCCTwoCCInfo
     */
    protected $cCInfo;

    /**
     * @return TicketingItemFOPQualifiersMultipleCCFOPCCTwoCCInfo
     */
    public function getCCInfo(): ?TicketingItemFOPQualifiersMultipleCCFOPCCTwoCCInfo
    {
        return $this->cCInfo;
    }

    /**
     * @param TicketingItemFOPQualifiersMultipleCCFOPCCTwoCCInfo $cCInfo
     *
     * @return self
     */
    public function setCCInfo(?TicketingItemFOPQualifiersMultipleCCFOPCCTwoCCInfo $cCInfo): self
    {
        $this->cCInfo = $cCInfo;

        return $this;
    }
}
