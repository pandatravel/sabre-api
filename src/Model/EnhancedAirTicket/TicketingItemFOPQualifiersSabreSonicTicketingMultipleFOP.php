<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOP extends AbstractModel
{
    /**
     * @var TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOPFare
     */
    protected $fare;
    /**
     * @var TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOPFOPOne
     */
    protected $fOPOne;
    /**
     * @var TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOPFOPTwo
     */
    protected $fOPTwo;
    /**
     * @var TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOPTaxes
     */
    protected $taxes;

    /**
     * @return TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOPFare
     */
    public function getFare(): ?TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOPFare
    {
        return $this->fare;
    }

    /**
     * @param TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOPFare $fare
     *
     * @return self
     */
    public function setFare(?TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOPFare $fare): self
    {
        $this->fare = $fare;

        return $this;
    }

    /**
     * @return TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOPFOPOne
     */
    public function getFOPOne(): ?TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOPFOPOne
    {
        return $this->fOPOne;
    }

    /**
     * @param TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOPFOPOne $fOPOne
     *
     * @return self
     */
    public function setFOPOne(?TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOPFOPOne $fOPOne): self
    {
        $this->fOPOne = $fOPOne;

        return $this;
    }

    /**
     * @return TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOPFOPTwo
     */
    public function getFOPTwo(): ?TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOPFOPTwo
    {
        return $this->fOPTwo;
    }

    /**
     * @param TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOPFOPTwo $fOPTwo
     *
     * @return self
     */
    public function setFOPTwo(?TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOPFOPTwo $fOPTwo): self
    {
        $this->fOPTwo = $fOPTwo;

        return $this;
    }

    /**
     * @return TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOPTaxes
     */
    public function getTaxes(): ?TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOPTaxes
    {
        return $this->taxes;
    }

    /**
     * @param TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOPTaxes $taxes
     *
     * @return self
     */
    public function setTaxes(?TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOPTaxes $taxes): self
    {
        $this->taxes = $taxes;

        return $this;
    }
}
