<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemFOPQualifiersBSPTicketingMultipleFOP extends AbstractModel
{
    /**
     * @var TicketingItemFOPQualifiersBSPTicketingMultipleFOPFare
     */
    protected $fare;
    /**
     * @var TicketingItemFOPQualifiersBSPTicketingMultipleFOPFOPOne
     */
    protected $fOPOne;
    /**
     * @var TicketingItemFOPQualifiersBSPTicketingMultipleFOPFOPTwo
     */
    protected $fOPTwo;
    /**
     * @var TicketingItemFOPQualifiersBSPTicketingMultipleFOPTaxes
     */
    protected $taxes;

    /**
     * @return TicketingItemFOPQualifiersBSPTicketingMultipleFOPFare
     */
    public function getFare(): ?TicketingItemFOPQualifiersBSPTicketingMultipleFOPFare
    {
        return $this->fare;
    }

    /**
     * @param TicketingItemFOPQualifiersBSPTicketingMultipleFOPFare $fare
     *
     * @return self
     */
    public function setFare(?TicketingItemFOPQualifiersBSPTicketingMultipleFOPFare $fare): self
    {
        $this->fare = $fare;

        return $this;
    }

    /**
     * @return TicketingItemFOPQualifiersBSPTicketingMultipleFOPFOPOne
     */
    public function getFOPOne(): ?TicketingItemFOPQualifiersBSPTicketingMultipleFOPFOPOne
    {
        return $this->fOPOne;
    }

    /**
     * @param TicketingItemFOPQualifiersBSPTicketingMultipleFOPFOPOne $fOPOne
     *
     * @return self
     */
    public function setFOPOne(?TicketingItemFOPQualifiersBSPTicketingMultipleFOPFOPOne $fOPOne): self
    {
        $this->fOPOne = $fOPOne;

        return $this;
    }

    /**
     * @return TicketingItemFOPQualifiersBSPTicketingMultipleFOPFOPTwo
     */
    public function getFOPTwo(): ?TicketingItemFOPQualifiersBSPTicketingMultipleFOPFOPTwo
    {
        return $this->fOPTwo;
    }

    /**
     * @param TicketingItemFOPQualifiersBSPTicketingMultipleFOPFOPTwo $fOPTwo
     *
     * @return self
     */
    public function setFOPTwo(?TicketingItemFOPQualifiersBSPTicketingMultipleFOPFOPTwo $fOPTwo): self
    {
        $this->fOPTwo = $fOPTwo;

        return $this;
    }

    /**
     * @return TicketingItemFOPQualifiersBSPTicketingMultipleFOPTaxes
     */
    public function getTaxes(): ?TicketingItemFOPQualifiersBSPTicketingMultipleFOPTaxes
    {
        return $this->taxes;
    }

    /**
     * @param TicketingItemFOPQualifiersBSPTicketingMultipleFOPTaxes $taxes
     *
     * @return self
     */
    public function setTaxes(?TicketingItemFOPQualifiersBSPTicketingMultipleFOPTaxes $taxes): self
    {
        $this->taxes = $taxes;

        return $this;
    }
}
