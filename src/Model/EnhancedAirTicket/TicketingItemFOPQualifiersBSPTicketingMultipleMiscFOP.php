<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemFOPQualifiersBSPTicketingMultipleMiscFOP extends AbstractModel
{
    /**
     * @var TicketingItemFOPQualifiersBSPTicketingMultipleMiscFOPFare
     */
    protected $fare;
    /**
     * @var TicketingItemFOPQualifiersBSPTicketingMultipleMiscFOPFOPOne
     */
    protected $fOPOne;
    /**
     * @var TicketingItemFOPQualifiersBSPTicketingMultipleMiscFOPFOPTwo
     */
    protected $fOPTwo;
    /**
     * @var TicketingItemFOPQualifiersBSPTicketingMultipleMiscFOPTaxes
     */
    protected $taxes;

    /**
     * @return TicketingItemFOPQualifiersBSPTicketingMultipleMiscFOPFare
     */
    public function getFare(): ?TicketingItemFOPQualifiersBSPTicketingMultipleMiscFOPFare
    {
        return $this->fare;
    }

    /**
     * @param TicketingItemFOPQualifiersBSPTicketingMultipleMiscFOPFare $fare
     *
     * @return self
     */
    public function setFare(?TicketingItemFOPQualifiersBSPTicketingMultipleMiscFOPFare $fare): self
    {
        $this->fare = $fare;

        return $this;
    }

    /**
     * @return TicketingItemFOPQualifiersBSPTicketingMultipleMiscFOPFOPOne
     */
    public function getFOPOne(): ?TicketingItemFOPQualifiersBSPTicketingMultipleMiscFOPFOPOne
    {
        return $this->fOPOne;
    }

    /**
     * @param TicketingItemFOPQualifiersBSPTicketingMultipleMiscFOPFOPOne $fOPOne
     *
     * @return self
     */
    public function setFOPOne(?TicketingItemFOPQualifiersBSPTicketingMultipleMiscFOPFOPOne $fOPOne): self
    {
        $this->fOPOne = $fOPOne;

        return $this;
    }

    /**
     * @return TicketingItemFOPQualifiersBSPTicketingMultipleMiscFOPFOPTwo
     */
    public function getFOPTwo(): ?TicketingItemFOPQualifiersBSPTicketingMultipleMiscFOPFOPTwo
    {
        return $this->fOPTwo;
    }

    /**
     * @param TicketingItemFOPQualifiersBSPTicketingMultipleMiscFOPFOPTwo $fOPTwo
     *
     * @return self
     */
    public function setFOPTwo(?TicketingItemFOPQualifiersBSPTicketingMultipleMiscFOPFOPTwo $fOPTwo): self
    {
        $this->fOPTwo = $fOPTwo;

        return $this;
    }

    /**
     * @return TicketingItemFOPQualifiersBSPTicketingMultipleMiscFOPTaxes
     */
    public function getTaxes(): ?TicketingItemFOPQualifiersBSPTicketingMultipleMiscFOPTaxes
    {
        return $this->taxes;
    }

    /**
     * @param TicketingItemFOPQualifiersBSPTicketingMultipleMiscFOPTaxes $taxes
     *
     * @return self
     */
    public function setTaxes(?TicketingItemFOPQualifiersBSPTicketingMultipleMiscFOPTaxes $taxes): self
    {
        $this->taxes = $taxes;

        return $this;
    }
}
