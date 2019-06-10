<?php

namespace Ammonkc\SabreApi\Model\InstaFlightsSearch;

use Ammonkc\SabreApi\AbstractModel;

class AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerTypeQuantity extends AbstractModel
{
    /**
     * The quantity of passengers for this Passenger Type Code.
     *
     * @var float
     */
    protected $quantity;
    /**
     * The Passenger Type Code.

    3 alphabetic characters.

     *
     * @var string
     */
    protected $code;

    /**
     * The quantity of passengers for this Passenger Type Code.
     *
     * @return float
     */
    public function getQuantity(): ?float
    {
        return $this->quantity;
    }

    /**
     * The quantity of passengers for this Passenger Type Code.
     *
     * @param float $quantity
     *
     * @return self
     */
    public function setQuantity(?float $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * The Passenger Type Code.

    3 alphabetic characters.

     *
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * The Passenger Type Code.

    3 alphabetic characters.

     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }
}
