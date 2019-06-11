<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemFOPQualifiersMultipleCCFOP extends AbstractModel
{
    /**
     * @var TicketingItemFOPQualifiersMultipleCCFOPFare
     */
    protected $fare;
    /**
     * @var TicketingItemFOPQualifiersMultipleCCFOPCCOne
     */
    protected $cCOne;
    /**
     * @var TicketingItemFOPQualifiersMultipleCCFOPCCTwo
     */
    protected $cCTwo;

    /**
     * @return TicketingItemFOPQualifiersMultipleCCFOPFare
     */
    public function getFare(): ?TicketingItemFOPQualifiersMultipleCCFOPFare
    {
        return $this->fare;
    }

    /**
     * @param TicketingItemFOPQualifiersMultipleCCFOPFare $fare
     *
     * @return self
     */
    public function setFare(?TicketingItemFOPQualifiersMultipleCCFOPFare $fare): self
    {
        $this->fare = $fare;

        return $this;
    }

    /**
     * @return TicketingItemFOPQualifiersMultipleCCFOPCCOne
     */
    public function getCCOne(): ?TicketingItemFOPQualifiersMultipleCCFOPCCOne
    {
        return $this->cCOne;
    }

    /**
     * @param TicketingItemFOPQualifiersMultipleCCFOPCCOne $cCOne
     *
     * @return self
     */
    public function setCCOne(?TicketingItemFOPQualifiersMultipleCCFOPCCOne $cCOne): self
    {
        $this->cCOne = $cCOne;

        return $this;
    }

    /**
     * @return TicketingItemFOPQualifiersMultipleCCFOPCCTwo
     */
    public function getCCTwo(): ?TicketingItemFOPQualifiersMultipleCCFOPCCTwo
    {
        return $this->cCTwo;
    }

    /**
     * @param TicketingItemFOPQualifiersMultipleCCFOPCCTwo $cCTwo
     *
     * @return self
     */
    public function setCCTwo(?TicketingItemFOPQualifiersMultipleCCFOPCCTwo $cCTwo): self
    {
        $this->cCTwo = $cCTwo;

        return $this;
    }
}
