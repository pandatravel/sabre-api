<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class TotalFareType extends AbstractModel
{
    /**
     * Air Extras total summary amount (currency for AirExtras is in Currency).
     *
     * @var float
     */
    protected $airExtrasAmount;
    /**
     * Base fare amount.
     *
     * @var float
     */
    protected $baseFareAmount;
    /**
     * Base fare currency code.
     *
     * @var string
     */
    protected $baseFareCurrency;
    /**
     * Booking fee amount.
     *
     * @var float
     */
    protected $bookingFeeAmount;
    /**
     * Construction total amount.
     *
     * @var float
     */
    protected $constructionAmount;
    /**
     * Construction currency code.
     *
     * @var string
     */
    protected $constructionCurrency;
    /**
     * Credit Card Fee Amount.
     *
     * @var float
     */
    protected $creditCardFeeAmount;
    /**
     * Tax currency code.
     *
     * @var string
     */
    protected $currency;
    /**
     * Effective price deviation.
     *
     * @var float
     */
    protected $effectivePriceDeviation;
    /**
     * Equivalent amount (including taxes).
     *
     * @var float
     */
    protected $equivalentAmount;
    /**
     * Equivalent currency code.
     *
     * @var string
     */
    protected $equivalentCurrency;
    /**
     * Service fee amount.
     *
     * @var float
     */
    protected $serviceFeeAmount;
    /**
     * Service fee tax.
     *
     * @var float
     */
    protected $serviceFeeTax;
    /**
     * Total price for all passenger types.
     *
     * @var float
     */
    protected $totalPrice;
    /**
     * Total price with Air Extras (currency for TotalPriceWithAirExtras is in Currency).
     *
     * @var float
     */
    protected $totalPriceWithAirExtras;
    /**
     * Total Tax Amount.
     *
     * @var float
     */
    protected $totalTaxAmount;
    /**
     * Total T-type OB fee for all passenger types.
     *
     * @var float
     */
    protected $totalTtypeObFee;

    /**
     * Air Extras total summary amount (currency for AirExtras is in Currency).
     *
     * @return float
     */
    public function getAirExtrasAmount(): float
    {
        return $this->airExtrasAmount;
    }

    /**
     * Air Extras total summary amount (currency for AirExtras is in Currency).
     *
     * @param float $airExtrasAmount
     *
     * @return self
     */
    public function setAirExtrasAmount(float $airExtrasAmount): self
    {
        $this->airExtrasAmount = $airExtrasAmount;

        return $this;
    }

    /**
     * Base fare amount.
     *
     * @return float
     */
    public function getBaseFareAmount(): float
    {
        return $this->baseFareAmount;
    }

    /**
     * Base fare amount.
     *
     * @param float $baseFareAmount
     *
     * @return self
     */
    public function setBaseFareAmount(float $baseFareAmount): self
    {
        $this->baseFareAmount = $baseFareAmount;

        return $this;
    }

    /**
     * Base fare currency code.
     *
     * @return string
     */
    public function getBaseFareCurrency(): string
    {
        return $this->baseFareCurrency;
    }

    /**
     * Base fare currency code.
     *
     * @param string $baseFareCurrency
     *
     * @return self
     */
    public function setBaseFareCurrency(string $baseFareCurrency): self
    {
        $this->baseFareCurrency = $baseFareCurrency;

        return $this;
    }

    /**
     * Booking fee amount.
     *
     * @return float
     */
    public function getBookingFeeAmount(): float
    {
        return $this->bookingFeeAmount;
    }

    /**
     * Booking fee amount.
     *
     * @param float $bookingFeeAmount
     *
     * @return self
     */
    public function setBookingFeeAmount(float $bookingFeeAmount): self
    {
        $this->bookingFeeAmount = $bookingFeeAmount;

        return $this;
    }

    /**
     * Construction total amount.
     *
     * @return float
     */
    public function getConstructionAmount(): float
    {
        return $this->constructionAmount;
    }

    /**
     * Construction total amount.
     *
     * @param float $constructionAmount
     *
     * @return self
     */
    public function setConstructionAmount(float $constructionAmount): self
    {
        $this->constructionAmount = $constructionAmount;

        return $this;
    }

    /**
     * Construction currency code.
     *
     * @return string
     */
    public function getConstructionCurrency(): string
    {
        return $this->constructionCurrency;
    }

    /**
     * Construction currency code.
     *
     * @param string $constructionCurrency
     *
     * @return self
     */
    public function setConstructionCurrency(string $constructionCurrency): self
    {
        $this->constructionCurrency = $constructionCurrency;

        return $this;
    }

    /**
     * Credit Card Fee Amount.
     *
     * @return float
     */
    public function getCreditCardFeeAmount(): float
    {
        return $this->creditCardFeeAmount;
    }

    /**
     * Credit Card Fee Amount.
     *
     * @param float $creditCardFeeAmount
     *
     * @return self
     */
    public function setCreditCardFeeAmount(float $creditCardFeeAmount): self
    {
        $this->creditCardFeeAmount = $creditCardFeeAmount;

        return $this;
    }

    /**
     * Tax currency code.
     *
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * Tax currency code.
     *
     * @param string $currency
     *
     * @return self
     */
    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Effective price deviation.
     *
     * @return float
     */
    public function getEffectivePriceDeviation(): float
    {
        return $this->effectivePriceDeviation;
    }

    /**
     * Effective price deviation.
     *
     * @param float $effectivePriceDeviation
     *
     * @return self
     */
    public function setEffectivePriceDeviation(float $effectivePriceDeviation): self
    {
        $this->effectivePriceDeviation = $effectivePriceDeviation;

        return $this;
    }

    /**
     * Equivalent amount (including taxes).
     *
     * @return float
     */
    public function getEquivalentAmount(): float
    {
        return $this->equivalentAmount;
    }

    /**
     * Equivalent amount (including taxes).
     *
     * @param float $equivalentAmount
     *
     * @return self
     */
    public function setEquivalentAmount(float $equivalentAmount): self
    {
        $this->equivalentAmount = $equivalentAmount;

        return $this;
    }

    /**
     * Equivalent currency code.
     *
     * @return string
     */
    public function getEquivalentCurrency(): string
    {
        return $this->equivalentCurrency;
    }

    /**
     * Equivalent currency code.
     *
     * @param string $equivalentCurrency
     *
     * @return self
     */
    public function setEquivalentCurrency(string $equivalentCurrency): self
    {
        $this->equivalentCurrency = $equivalentCurrency;

        return $this;
    }

    /**
     * Service fee amount.
     *
     * @return float
     */
    public function getServiceFeeAmount(): float
    {
        return $this->serviceFeeAmount;
    }

    /**
     * Service fee amount.
     *
     * @param float $serviceFeeAmount
     *
     * @return self
     */
    public function setServiceFeeAmount(float $serviceFeeAmount): self
    {
        $this->serviceFeeAmount = $serviceFeeAmount;

        return $this;
    }

    /**
     * Service fee tax.
     *
     * @return float
     */
    public function getServiceFeeTax(): float
    {
        return $this->serviceFeeTax;
    }

    /**
     * Service fee tax.
     *
     * @param float $serviceFeeTax
     *
     * @return self
     */
    public function setServiceFeeTax(float $serviceFeeTax): self
    {
        $this->serviceFeeTax = $serviceFeeTax;

        return $this;
    }

    /**
     * Total price for all passenger types.
     *
     * @return float
     */
    public function getTotalPrice(): float
    {
        return $this->totalPrice;
    }

    /**
     * Total price for all passenger types.
     *
     * @param float $totalPrice
     *
     * @return self
     */
    public function setTotalPrice(float $totalPrice): self
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
     * Total price with Air Extras (currency for TotalPriceWithAirExtras is in Currency).
     *
     * @return float
     */
    public function getTotalPriceWithAirExtras(): float
    {
        return $this->totalPriceWithAirExtras;
    }

    /**
     * Total price with Air Extras (currency for TotalPriceWithAirExtras is in Currency).
     *
     * @param float $totalPriceWithAirExtras
     *
     * @return self
     */
    public function setTotalPriceWithAirExtras(float $totalPriceWithAirExtras): self
    {
        $this->totalPriceWithAirExtras = $totalPriceWithAirExtras;

        return $this;
    }

    /**
     * Total Tax Amount.
     *
     * @return float
     */
    public function getTotalTaxAmount(): float
    {
        return $this->totalTaxAmount;
    }

    /**
     * Total Tax Amount.
     *
     * @param float $totalTaxAmount
     *
     * @return self
     */
    public function setTotalTaxAmount(float $totalTaxAmount): self
    {
        $this->totalTaxAmount = $totalTaxAmount;

        return $this;
    }

    /**
     * Total T-type OB fee for all passenger types.
     *
     * @return float
     */
    public function getTotalTtypeObFee(): float
    {
        return $this->totalTtypeObFee;
    }

    /**
     * Total T-type OB fee for all passenger types.
     *
     * @param float $totalTtypeObFee
     *
     * @return self
     */
    public function setTotalTtypeObFee(float $totalTtypeObFee): self
    {
        $this->totalTtypeObFee = $totalTtypeObFee;

        return $this;
    }
}
