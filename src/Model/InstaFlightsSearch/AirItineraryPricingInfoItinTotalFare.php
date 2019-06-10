<?php

namespace Ammonkc\SabreApi\Model\InstaFlightsSearch;

use Ammonkc\SabreApi\AbstractModel;

class AirItineraryPricingInfoItinTotalFare extends AbstractModel
{
    /**
     * @var AirItineraryPricingInfoItinTotalFareFareConstruction
     */
    protected $fareConstruction;
    /**
     * @var AirItineraryPricingInfoItinTotalFareTotalFare
     */
    protected $totalFare;
    /**
     * @var AirItineraryPricingInfoItinTotalFareBaseFare
     */
    protected $baseFare;
    /**
     * @var AirItineraryPricingInfoItinTotalFareEquivFare
     */
    protected $equivFare;
    /**
     * @var AirItineraryPricingInfoItinTotalFareTaxes
     */
    protected $taxes;

    /**
     * @return AirItineraryPricingInfoItinTotalFareFareConstruction
     */
    public function getFareConstruction(): ?AirItineraryPricingInfoItinTotalFareFareConstruction
    {
        return $this->fareConstruction;
    }

    /**
     * @param AirItineraryPricingInfoItinTotalFareFareConstruction $fareConstruction
     *
     * @return self
     */
    public function setFareConstruction(?AirItineraryPricingInfoItinTotalFareFareConstruction $fareConstruction): self
    {
        $this->fareConstruction = $fareConstruction;

        return $this;
    }

    /**
     * @return AirItineraryPricingInfoItinTotalFareTotalFare
     */
    public function getTotalFare(): ?AirItineraryPricingInfoItinTotalFareTotalFare
    {
        return $this->totalFare;
    }

    /**
     * @param AirItineraryPricingInfoItinTotalFareTotalFare $totalFare
     *
     * @return self
     */
    public function setTotalFare(?AirItineraryPricingInfoItinTotalFareTotalFare $totalFare): self
    {
        $this->totalFare = $totalFare;

        return $this;
    }

    /**
     * @return AirItineraryPricingInfoItinTotalFareBaseFare
     */
    public function getBaseFare(): ?AirItineraryPricingInfoItinTotalFareBaseFare
    {
        return $this->baseFare;
    }

    /**
     * @param AirItineraryPricingInfoItinTotalFareBaseFare $baseFare
     *
     * @return self
     */
    public function setBaseFare(?AirItineraryPricingInfoItinTotalFareBaseFare $baseFare): self
    {
        $this->baseFare = $baseFare;

        return $this;
    }

    /**
     * @return AirItineraryPricingInfoItinTotalFareEquivFare
     */
    public function getEquivFare(): ?AirItineraryPricingInfoItinTotalFareEquivFare
    {
        return $this->equivFare;
    }

    /**
     * @param AirItineraryPricingInfoItinTotalFareEquivFare $equivFare
     *
     * @return self
     */
    public function setEquivFare(?AirItineraryPricingInfoItinTotalFareEquivFare $equivFare): self
    {
        $this->equivFare = $equivFare;

        return $this;
    }

    /**
     * @return AirItineraryPricingInfoItinTotalFareTaxes
     */
    public function getTaxes(): ?AirItineraryPricingInfoItinTotalFareTaxes
    {
        return $this->taxes;
    }

    /**
     * @param AirItineraryPricingInfoItinTotalFareTaxes $taxes
     *
     * @return self
     */
    public function setTaxes(?AirItineraryPricingInfoItinTotalFareTaxes $taxes): self
    {
        $this->taxes = $taxes;

        return $this;
    }
}
