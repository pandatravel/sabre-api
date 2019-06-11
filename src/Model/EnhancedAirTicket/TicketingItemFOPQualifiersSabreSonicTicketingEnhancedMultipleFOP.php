<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOP extends AbstractModel
{
    /**
     * @var TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFare
     */
    protected $fare;
    /**
     * @var TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPOne
     */
    protected $fOPOne;
    /**
     * @var TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPTwo
     */
    protected $fOPTwo;
    /**
     * @var TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPTaxes
     */
    protected $taxes;

    /**
     * @return TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFare
     */
    public function getFare(): ?TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFare
    {
        return $this->fare;
    }

    /**
     * @param TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFare $fare
     *
     * @return self
     */
    public function setFare(?TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFare $fare): self
    {
        $this->fare = $fare;

        return $this;
    }

    /**
     * @return TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPOne
     */
    public function getFOPOne(): ?TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPOne
    {
        return $this->fOPOne;
    }

    /**
     * @param TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPOne $fOPOne
     *
     * @return self
     */
    public function setFOPOne(?TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPOne $fOPOne): self
    {
        $this->fOPOne = $fOPOne;

        return $this;
    }

    /**
     * @return TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPTwo
     */
    public function getFOPTwo(): ?TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPTwo
    {
        return $this->fOPTwo;
    }

    /**
     * @param TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPTwo $fOPTwo
     *
     * @return self
     */
    public function setFOPTwo(?TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPTwo $fOPTwo): self
    {
        $this->fOPTwo = $fOPTwo;

        return $this;
    }

    /**
     * @return TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPTaxes
     */
    public function getTaxes(): ?TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPTaxes
    {
        return $this->taxes;
    }

    /**
     * @param TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPTaxes $taxes
     *
     * @return self
     */
    public function setTaxes(?TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPTaxes $taxes): self
    {
        $this->taxes = $taxes;

        return $this;
    }
}
