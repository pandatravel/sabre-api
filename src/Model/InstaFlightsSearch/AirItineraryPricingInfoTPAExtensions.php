<?php

namespace Ammonkc\SabreApi\Model\InstaFlightsSearch;

use Ammonkc\SabreApi\AbstractModel;

class AirItineraryPricingInfoTPAExtensions extends AbstractModel
{
    /**
     * @var AirItineraryPricingInfoTPAExtensionsDivideInParty
     */
    protected $divideInParty;

    /**
     * @return AirItineraryPricingInfoTPAExtensionsDivideInParty
     */
    public function getDivideInParty(): ?AirItineraryPricingInfoTPAExtensionsDivideInParty
    {
        return $this->divideInParty;
    }

    /**
     * @param AirItineraryPricingInfoTPAExtensionsDivideInParty $divideInParty
     *
     * @return self
     */
    public function setDivideInParty(?AirItineraryPricingInfoTPAExtensionsDivideInParty $divideInParty): self
    {
        $this->divideInParty = $divideInParty;

        return $this;
    }
}
