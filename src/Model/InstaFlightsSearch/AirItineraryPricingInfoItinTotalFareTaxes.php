<?php

namespace Ammonkc\SabreApi\Model\InstaFlightsSearch;

use Ammonkc\SabreApi\AbstractModel;

class AirItineraryPricingInfoItinTotalFareTaxes extends AbstractModel
{
    /**
     * @var AirItineraryPricingInfoItinTotalFareTaxesTaxItem[]
     */
    protected $tax;

    /**
     * @return AirItineraryPricingInfoItinTotalFareTaxesTaxItem[]
     */
    public function getTax(): ?array
    {
        return $this->tax;
    }

    /**
     * @param AirItineraryPricingInfoItinTotalFareTaxesTaxItem[] $tax
     *
     * @return self
     */
    public function setTax(?array $tax): self
    {
        $this->tax = $tax;

        return $this;
    }
}
