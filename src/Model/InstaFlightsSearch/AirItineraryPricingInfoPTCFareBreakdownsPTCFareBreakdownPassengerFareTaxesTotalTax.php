<?php

namespace Ammonkc\SabreApi\Model\InstaFlightsSearch;

use Ammonkc\SabreApi\AbstractModel;

class AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerFareTaxesTotalTax extends AbstractModel
{
    /**
     * 3-character currency code.
     *
     * @var string
     */
    protected $currencyCode;
    /**
     * Quantity of decimal places in the amount.
     *
     * @var float
     */
    protected $decimalPlaces;
    /**
     * The sum of the total taxes in PTC_Breakdown.PassengerFare.Taxes.Tax.
     *
     * @var float
     */
    protected $amount;

    /**
     * 3-character currency code.
     *
     * @return string
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    /**
     * 3-character currency code.
     *
     * @param string $currencyCode
     *
     * @return self
     */
    public function setCurrencyCode(?string $currencyCode): self
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Quantity of decimal places in the amount.
     *
     * @return float
     */
    public function getDecimalPlaces(): ?float
    {
        return $this->decimalPlaces;
    }

    /**
     * Quantity of decimal places in the amount.
     *
     * @param float $decimalPlaces
     *
     * @return self
     */
    public function setDecimalPlaces(?float $decimalPlaces): self
    {
        $this->decimalPlaces = $decimalPlaces;

        return $this;
    }

    /**
     * The sum of the total taxes in PTC_Breakdown.PassengerFare.Taxes.Tax.
     *
     * @return float
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * The sum of the total taxes in PTC_Breakdown.PassengerFare.Taxes.Tax.
     *
     * @param float $amount
     *
     * @return self
     */
    public function setAmount(?float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }
}
