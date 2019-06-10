<?php

namespace Ammonkc\SabreApi\Model\InstaFlightsSearch;

use Ammonkc\SabreApi\AbstractModel;

class AirItineraryPricingInfoFareInfosFareInfoItemTPAExtensionsCabin extends AbstractModel
{
    /**
     * Cabin code of the flight segment for the itinerary and fare.
     *
     * @var string
     */
    protected $cabin;

    /**
     * Cabin code of the flight segment for the itinerary and fare.
     *
     * @return string
     */
    public function getCabin(): ?string
    {
        return $this->cabin;
    }

    /**
     * Cabin code of the flight segment for the itinerary and fare.
     *
     * @param string $cabin
     *
     * @return self
     */
    public function setCabin(?string $cabin): self
    {
        $this->cabin = $cabin;

        return $this;
    }
}
