<?php

namespace Ammonkc\SabreApi\Model\InstaFlightsSearch;

use Ammonkc\SabreApi\AbstractModel;

class AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdown extends AbstractModel
{
    /**
     * @var AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerTypeQuantity
     */
    protected $passengerTypeQuantity;
    /**
     * @var AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownFareBasisCodes
     */
    protected $fareBasisCodes;
    /**
     * @var AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerFare
     */
    protected $passengerFare;
    /**
     * @var AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownEndorsements
     */
    protected $endorsements;

    /**
     * @return AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerTypeQuantity
     */
    public function getPassengerTypeQuantity(): ?AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerTypeQuantity
    {
        return $this->passengerTypeQuantity;
    }

    /**
     * @param AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerTypeQuantity $passengerTypeQuantity
     *
     * @return self
     */
    public function setPassengerTypeQuantity(?AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerTypeQuantity $passengerTypeQuantity): self
    {
        $this->passengerTypeQuantity = $passengerTypeQuantity;

        return $this;
    }

    /**
     * @return AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownFareBasisCodes
     */
    public function getFareBasisCodes(): ?AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownFareBasisCodes
    {
        return $this->fareBasisCodes;
    }

    /**
     * @param AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownFareBasisCodes $fareBasisCodes
     *
     * @return self
     */
    public function setFareBasisCodes(?AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownFareBasisCodes $fareBasisCodes): self
    {
        $this->fareBasisCodes = $fareBasisCodes;

        return $this;
    }

    /**
     * @return AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerFare
     */
    public function getPassengerFare(): ?AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerFare
    {
        return $this->passengerFare;
    }

    /**
     * @param AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerFare $passengerFare
     *
     * @return self
     */
    public function setPassengerFare(?AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerFare $passengerFare): self
    {
        $this->passengerFare = $passengerFare;

        return $this;
    }

    /**
     * @return AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownEndorsements
     */
    public function getEndorsements(): ?AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownEndorsements
    {
        return $this->endorsements;
    }

    /**
     * @param AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownEndorsements $endorsements
     *
     * @return self
     */
    public function setEndorsements(?AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownEndorsements $endorsements): self
    {
        $this->endorsements = $endorsements;

        return $this;
    }
}
