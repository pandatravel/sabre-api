<?php

namespace Ammonkc\SabreApi\Model\InstaFlightsSearch;

use Ammonkc\SabreApi\AbstractModel;

class AirItineraryPricingInfoFareInfosFareInfoItemTPAExtensionsSeatsRemaining extends AbstractModel
{
    /**
     * @var bool
     */
    protected $belowMin;
    /**
     * The quantity of seats available for the specified fare and itinerary.

    All flight options returned will have a quantity equal to or greater than the `passengercount` defined in the request.

     *
     * @var float
     */
    protected $number;

    /**
     * @return bool
     */
    public function getBelowMin(): ?bool
    {
        return $this->belowMin;
    }

    /**
     * @param bool $belowMin
     *
     * @return self
     */
    public function setBelowMin(?bool $belowMin): self
    {
        $this->belowMin = $belowMin;

        return $this;
    }

    /**
     * The quantity of seats available for the specified fare and itinerary.

    All flight options returned will have a quantity equal to or greater than the `passengercount` defined in the request.

     *
     * @return float
     */
    public function getNumber(): ?float
    {
        return $this->number;
    }

    /**
     * The quantity of seats available for the specified fare and itinerary.

    All flight options returned will have a quantity equal to or greater than the `passengercount` defined in the request.

     *
     * @param float $number
     *
     * @return self
     */
    public function setNumber(?float $number): self
    {
        $this->number = $number;

        return $this;
    }
}
