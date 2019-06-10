<?php

namespace Ammonkc\SabreApi\Model\InstaFlightsSearch;

use Ammonkc\SabreApi\AbstractModel;

class AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerFareTaxes extends AbstractModel
{
    /**
     * The sum of all tax code amounts for the breakdown of this passenger type and quantity.
     *
     * @var AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerFareTaxesTotalTax
     */
    protected $totalTax;
    /**
     * @var AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerFareTaxesTaxItem[]
     */
    protected $tax;

    /**
     * The sum of all tax code amounts for the breakdown of this passenger type and quantity.
     *
     * @return AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerFareTaxesTotalTax
     */
    public function getTotalTax(): ?AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerFareTaxesTotalTax
    {
        return $this->totalTax;
    }

    /**
     * The sum of all tax code amounts for the breakdown of this passenger type and quantity.
     *
     * @param AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerFareTaxesTotalTax $totalTax
     *
     * @return self
     */
    public function setTotalTax(?AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerFareTaxesTotalTax $totalTax): self
    {
        $this->totalTax = $totalTax;

        return $this;
    }

    /**
     * @return AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerFareTaxesTaxItem[]
     */
    public function getTax(): ?array
    {
        return $this->tax;
    }

    /**
     * @param AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerFareTaxesTaxItem[] $tax
     *
     * @return self
     */
    public function setTax(?array $tax): self
    {
        $this->tax = $tax;

        return $this;
    }
}
