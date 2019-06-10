<?php

namespace Ammonkc\SabreApi\Model\InstaFlightsSearch;

use Ammonkc\SabreApi\AbstractModel;

class AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerFare extends AbstractModel
{
    /**
     * @var AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerFareFareConstruction
     */
    protected $fareConstruction;
    /**
     * @var AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerFareTotalFare
     */
    protected $totalFare;
    /**
     * @var AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerFareBaseFare
     */
    protected $baseFare;
    /**
     * @var AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerFareEquivFare
     */
    protected $equivFare;
    /**
     * @var AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerFareTaxes
     */
    protected $taxes;

    /**
     * @return AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerFareFareConstruction
     */
    public function getFareConstruction(): ?AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerFareFareConstruction
    {
        return $this->fareConstruction;
    }

    /**
     * @param AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerFareFareConstruction $fareConstruction
     *
     * @return self
     */
    public function setFareConstruction(?AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerFareFareConstruction $fareConstruction): self
    {
        $this->fareConstruction = $fareConstruction;

        return $this;
    }

    /**
     * @return AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerFareTotalFare
     */
    public function getTotalFare(): ?AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerFareTotalFare
    {
        return $this->totalFare;
    }

    /**
     * @param AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerFareTotalFare $totalFare
     *
     * @return self
     */
    public function setTotalFare(?AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerFareTotalFare $totalFare): self
    {
        $this->totalFare = $totalFare;

        return $this;
    }

    /**
     * @return AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerFareBaseFare
     */
    public function getBaseFare(): ?AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerFareBaseFare
    {
        return $this->baseFare;
    }

    /**
     * @param AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerFareBaseFare $baseFare
     *
     * @return self
     */
    public function setBaseFare(?AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerFareBaseFare $baseFare): self
    {
        $this->baseFare = $baseFare;

        return $this;
    }

    /**
     * @return AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerFareEquivFare
     */
    public function getEquivFare(): ?AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerFareEquivFare
    {
        return $this->equivFare;
    }

    /**
     * @param AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerFareEquivFare $equivFare
     *
     * @return self
     */
    public function setEquivFare(?AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerFareEquivFare $equivFare): self
    {
        $this->equivFare = $equivFare;

        return $this;
    }

    /**
     * @return AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerFareTaxes
     */
    public function getTaxes(): ?AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerFareTaxes
    {
        return $this->taxes;
    }

    /**
     * @param AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerFareTaxes $taxes
     *
     * @return self
     */
    public function setTaxes(?AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerFareTaxes $taxes): self
    {
        $this->taxes = $taxes;

        return $this;
    }
}
