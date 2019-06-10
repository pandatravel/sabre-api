<?php

namespace Ammonkc\SabreApi\Model\InstaFlightsSearch;

use Ammonkc\SabreApi\AbstractModel;

class AirItineraryPricingInfoTPAExtensionsDivideInParty extends AbstractModel
{
    /**
     * An indicator for different passenger types that are booked in different inventories.

    The API supports a single adult passenger type of ADT, therefore, you can ignore this indicator.

     *
     * @var bool
     */
    protected $indicator;

    /**
     * An indicator for different passenger types that are booked in different inventories.

    The API supports a single adult passenger type of ADT, therefore, you can ignore this indicator.

     *
     * @return bool
     */
    public function getIndicator(): ?bool
    {
        return $this->indicator;
    }

    /**
     * An indicator for different passenger types that are booked in different inventories.

    The API supports a single adult passenger type of ADT, therefore, you can ignore this indicator.

     *
     * @param bool $indicator
     *
     * @return self
     */
    public function setIndicator(?bool $indicator): self
    {
        $this->indicator = $indicator;

        return $this;
    }
}
