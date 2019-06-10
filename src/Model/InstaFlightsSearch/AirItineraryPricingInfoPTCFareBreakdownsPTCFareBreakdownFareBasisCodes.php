<?php

namespace Ammonkc\SabreApi\Model\InstaFlightsSearch;

use Ammonkc\SabreApi\AbstractModel;

class AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownFareBasisCodes extends AbstractModel
{
    /**
     * An array of fare basis codes for the fare for this passenger type.

    The fare basis codes in the response are used to price the segments in the itinerary.
    Repeat factor: A maximum of 10.

     *
     * @var AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownFareBasisCodesFareBasisCodeItem[]
     */
    protected $fareBasisCode;

    /**
     * An array of fare basis codes for the fare for this passenger type.

    The fare basis codes in the response are used to price the segments in the itinerary.
    Repeat factor: A maximum of 10.

     *
     * @return AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownFareBasisCodesFareBasisCodeItem[]
     */
    public function getFareBasisCode(): ?array
    {
        return $this->fareBasisCode;
    }

    /**
     * An array of fare basis codes for the fare for this passenger type.

    The fare basis codes in the response are used to price the segments in the itinerary.
    Repeat factor: A maximum of 10.

     *
     * @param AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownFareBasisCodesFareBasisCodeItem[] $fareBasisCode
     *
     * @return self
     */
    public function setFareBasisCode(?array $fareBasisCode): self
    {
        $this->fareBasisCode = $fareBasisCode;

        return $this;
    }
}
