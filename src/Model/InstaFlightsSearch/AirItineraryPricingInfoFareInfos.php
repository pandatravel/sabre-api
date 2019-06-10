<?php

namespace Ammonkc\SabreApi\Model\InstaFlightsSearch;

use Ammonkc\SabreApi\AbstractModel;

class AirItineraryPricingInfoFareInfos extends AbstractModel
{
    /**
     * An array of one or more fare reference codes.
     *
     * @var AirItineraryPricingInfoFareInfosFareInfoItem[]
     */
    protected $fareInfo;

    /**
     * An array of one or more fare reference codes.
     *
     * @return AirItineraryPricingInfoFareInfosFareInfoItem[]
     */
    public function getFareInfo(): ?array
    {
        return $this->fareInfo;
    }

    /**
     * An array of one or more fare reference codes.
     *
     * @param AirItineraryPricingInfoFareInfosFareInfoItem[] $fareInfo
     *
     * @return self
     */
    public function setFareInfo(?array $fareInfo): self
    {
        $this->fareInfo = $fareInfo;

        return $this;
    }
}
