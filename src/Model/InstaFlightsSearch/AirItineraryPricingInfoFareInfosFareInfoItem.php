<?php

namespace Ammonkc\SabreApi\Model\InstaFlightsSearch;

use Ammonkc\SabreApi\AbstractModel;

class AirItineraryPricingInfoFareInfosFareInfoItem extends AbstractModel
{
    /**
     * The booking code for the fare that corresponds to the flight segment in the itinerary.

    1 to 8 characters.

     *
     * @var string
     */
    protected $fareReference;
    /**
     * @var AirItineraryPricingInfoFareInfosFareInfoItemTPAExtensions
     */
    protected $tPAExtensions;

    /**
     * The booking code for the fare that corresponds to the flight segment in the itinerary.

    1 to 8 characters.

     *
     * @return string
     */
    public function getFareReference(): ?string
    {
        return $this->fareReference;
    }

    /**
     * The booking code for the fare that corresponds to the flight segment in the itinerary.

    1 to 8 characters.

     *
     * @param string $fareReference
     *
     * @return self
     */
    public function setFareReference(?string $fareReference): self
    {
        $this->fareReference = $fareReference;

        return $this;
    }

    /**
     * @return AirItineraryPricingInfoFareInfosFareInfoItemTPAExtensions
     */
    public function getTPAExtensions(): ?AirItineraryPricingInfoFareInfosFareInfoItemTPAExtensions
    {
        return $this->tPAExtensions;
    }

    /**
     * @param AirItineraryPricingInfoFareInfosFareInfoItemTPAExtensions $tPAExtensions
     *
     * @return self
     */
    public function setTPAExtensions(?AirItineraryPricingInfoFareInfosFareInfoItemTPAExtensions $tPAExtensions): self
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }
}
