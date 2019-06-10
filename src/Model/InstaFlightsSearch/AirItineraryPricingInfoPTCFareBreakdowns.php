<?php

namespace Ammonkc\SabreApi\Model\InstaFlightsSearch;

use Ammonkc\SabreApi\AbstractModel;

class AirItineraryPricingInfoPTCFareBreakdowns extends AbstractModel
{
    /**
     * @var AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdown
     */
    protected $pTCFareBreakdown;

    /**
     * @return AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdown
     */
    public function getPTCFareBreakdown(): ?AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdown
    {
        return $this->pTCFareBreakdown;
    }

    /**
     * @param AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdown $pTCFareBreakdown
     *
     * @return self
     */
    public function setPTCFareBreakdown(?AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdown $pTCFareBreakdown): self
    {
        $this->pTCFareBreakdown = $pTCFareBreakdown;

        return $this;
    }
}
