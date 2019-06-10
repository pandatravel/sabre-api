<?php

namespace Ammonkc\SabreApi\Model\InstaFlightsSearch;

use Ammonkc\SabreApi\AbstractModel;

class AirItineraryPricingInfo extends AbstractModel
{
    /**
     * @var AirItineraryPricingInfoTPAExtensions
     */
    protected $tPAExtensions;
    /**
     * @var AirItineraryPricingInfoItinTotalFare
     */
    protected $itinTotalFare;
    /**
     * @var AirItineraryPricingInfoFareInfos
     */
    protected $fareInfos;
    /**
     * @var AirItineraryPricingInfoPTCFareBreakdowns
     */
    protected $pTCFareBreakdowns;

    /**
     * @return AirItineraryPricingInfoTPAExtensions
     */
    public function getTPAExtensions(): ?AirItineraryPricingInfoTPAExtensions
    {
        return $this->tPAExtensions;
    }

    /**
     * @param AirItineraryPricingInfoTPAExtensions $tPAExtensions
     *
     * @return self
     */
    public function setTPAExtensions(?AirItineraryPricingInfoTPAExtensions $tPAExtensions): self
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }

    /**
     * @return AirItineraryPricingInfoItinTotalFare
     */
    public function getItinTotalFare(): ?AirItineraryPricingInfoItinTotalFare
    {
        return $this->itinTotalFare;
    }

    /**
     * @param AirItineraryPricingInfoItinTotalFare $itinTotalFare
     *
     * @return self
     */
    public function setItinTotalFare(?AirItineraryPricingInfoItinTotalFare $itinTotalFare): self
    {
        $this->itinTotalFare = $itinTotalFare;

        return $this;
    }

    /**
     * @return AirItineraryPricingInfoFareInfos
     */
    public function getFareInfos(): ?AirItineraryPricingInfoFareInfos
    {
        return $this->fareInfos;
    }

    /**
     * @param AirItineraryPricingInfoFareInfos $fareInfos
     *
     * @return self
     */
    public function setFareInfos(?AirItineraryPricingInfoFareInfos $fareInfos): self
    {
        $this->fareInfos = $fareInfos;

        return $this;
    }

    /**
     * @return AirItineraryPricingInfoPTCFareBreakdowns
     */
    public function getPTCFareBreakdowns(): ?AirItineraryPricingInfoPTCFareBreakdowns
    {
        return $this->pTCFareBreakdowns;
    }

    /**
     * @param AirItineraryPricingInfoPTCFareBreakdowns $pTCFareBreakdowns
     *
     * @return self
     */
    public function setPTCFareBreakdowns(?AirItineraryPricingInfoPTCFareBreakdowns $pTCFareBreakdowns): self
    {
        $this->pTCFareBreakdowns = $pTCFareBreakdowns;

        return $this;
    }
}
