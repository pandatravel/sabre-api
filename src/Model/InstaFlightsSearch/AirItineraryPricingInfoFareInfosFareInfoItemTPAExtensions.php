<?php

namespace Ammonkc\SabreApi\Model\InstaFlightsSearch;

use Ammonkc\SabreApi\AbstractModel;

class AirItineraryPricingInfoFareInfosFareInfoItemTPAExtensions extends AbstractModel
{
    /**
     * @var AirItineraryPricingInfoFareInfosFareInfoItemTPAExtensionsCabin
     */
    protected $cabin;
    /**
     * @var AirItineraryPricingInfoFareInfosFareInfoItemTPAExtensionsSeatsRemaining
     */
    protected $seatsRemaining;

    /**
     * @return AirItineraryPricingInfoFareInfosFareInfoItemTPAExtensionsCabin
     */
    public function getCabin(): ?AirItineraryPricingInfoFareInfosFareInfoItemTPAExtensionsCabin
    {
        return $this->cabin;
    }

    /**
     * @param AirItineraryPricingInfoFareInfosFareInfoItemTPAExtensionsCabin $cabin
     *
     * @return self
     */
    public function setCabin(?AirItineraryPricingInfoFareInfosFareInfoItemTPAExtensionsCabin $cabin): self
    {
        $this->cabin = $cabin;

        return $this;
    }

    /**
     * @return AirItineraryPricingInfoFareInfosFareInfoItemTPAExtensionsSeatsRemaining
     */
    public function getSeatsRemaining(): ?AirItineraryPricingInfoFareInfosFareInfoItemTPAExtensionsSeatsRemaining
    {
        return $this->seatsRemaining;
    }

    /**
     * @param AirItineraryPricingInfoFareInfosFareInfoItemTPAExtensionsSeatsRemaining $seatsRemaining
     *
     * @return self
     */
    public function setSeatsRemaining(?AirItineraryPricingInfoFareInfosFareInfoItemTPAExtensionsSeatsRemaining $seatsRemaining): self
    {
        $this->seatsRemaining = $seatsRemaining;

        return $this;
    }
}
