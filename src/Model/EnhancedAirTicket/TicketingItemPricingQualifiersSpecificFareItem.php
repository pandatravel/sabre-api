<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemPricingQualifiersSpecificFareItem extends AbstractModel
{
    /**
     * "RPH" is used to match up with ../OptionalQualifiers/PricingQualifiers/ItineraryOptions/Segment.
     *
     * @var string
     */
    protected $rPH;
    /**
     * "FareBasis" is used to specify a Fare Basis Code.
     *
     * @var string
     */
    protected $fareBasis;

    /**
     * "RPH" is used to match up with ../OptionalQualifiers/PricingQualifiers/ItineraryOptions/Segment.
     *
     * @return string
     */
    public function getRPH(): ?string
    {
        return $this->rPH;
    }

    /**
     * "RPH" is used to match up with ../OptionalQualifiers/PricingQualifiers/ItineraryOptions/Segment.
     *
     * @param string $rPH
     *
     * @return self
     */
    public function setRPH(?string $rPH): self
    {
        $this->rPH = $rPH;

        return $this;
    }

    /**
     * "FareBasis" is used to specify a Fare Basis Code.
     *
     * @return string
     */
    public function getFareBasis(): ?string
    {
        return $this->fareBasis;
    }

    /**
     * "FareBasis" is used to specify a Fare Basis Code.
     *
     * @param string $fareBasis
     *
     * @return self
     */
    public function setFareBasis(?string $fareBasis): self
    {
        $this->fareBasis = $fareBasis;

        return $this;
    }
}
