<?php

namespace Ammonkc\SabreApi\Model\InstaFlightsSearch;

use Ammonkc\SabreApi\AbstractModel;

class AirItineraryPricingInfoItinTotalFareTaxesTaxItem extends AbstractModel
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
     * @var string
     */
    protected $taxCode;
    /**
     * The sum of all taxes applied to the total fare.
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
     * @return string
     */
    public function getTaxCode(): ?string
    {
        return $this->taxCode;
    }

    /**
     * @param string $taxCode
     *
     * @return self
     */
    public function setTaxCode(?string $taxCode): self
    {
        $this->taxCode = $taxCode;

        return $this;
    }

    /**
     * The sum of all taxes applied to the total fare.
     *
     * @return float
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * The sum of all taxes applied to the total fare.
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
