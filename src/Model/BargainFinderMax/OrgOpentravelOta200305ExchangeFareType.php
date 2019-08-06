<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305ExchangeFareType extends AbstractModel
{
    /**
     * Base fare amount.
     *
     * @var float
     */
    protected $baseFareAmount;
    /**
     * Base fare currency.
     *
     * @var string
     */
    protected $baseFareCurrency;
    /**
     * Fare calc currency.
     *
     * @var string
     */
    protected $fareCalcCurrency;
    /**
     * Non-refundable Base Fare Amount. Currency is defined by @BaseFareCurrency.
     *
     * @var float
     */
    protected $nonRefundableAmount;
    /**
     * Rate of Exchange override (note: doesn't need to be specified if FareCalc currency and BaseFare currency is the same).
     *
     * @var float
     */
    protected $rOE;
    /**
     * Validating carrier.
     *
     * @var string
     */
    protected $validatingCarrier;

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
     * Base fare currency.
     *
     * @return string
     */
    public function getBaseFareCurrency(): string
    {
        return $this->baseFareCurrency;
    }

    /**
     * Base fare currency.
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
     * Fare calc currency.
     *
     * @return string
     */
    public function getFareCalcCurrency(): string
    {
        return $this->fareCalcCurrency;
    }

    /**
     * Fare calc currency.
     *
     * @param string $fareCalcCurrency
     *
     * @return self
     */
    public function setFareCalcCurrency(string $fareCalcCurrency): self
    {
        $this->fareCalcCurrency = $fareCalcCurrency;

        return $this;
    }

    /**
     * Non-refundable Base Fare Amount. Currency is defined by @BaseFareCurrency.
     *
     * @return float
     */
    public function getNonRefundableAmount(): float
    {
        return $this->nonRefundableAmount;
    }

    /**
     * Non-refundable Base Fare Amount. Currency is defined by @BaseFareCurrency.
     *
     * @param float $nonRefundableAmount
     *
     * @return self
     */
    public function setNonRefundableAmount(float $nonRefundableAmount): self
    {
        $this->nonRefundableAmount = $nonRefundableAmount;

        return $this;
    }

    /**
     * Rate of Exchange override (note: doesn't need to be specified if FareCalc currency and BaseFare currency is the same).
     *
     * @return float
     */
    public function getROE(): float
    {
        return $this->rOE;
    }

    /**
     * Rate of Exchange override (note: doesn't need to be specified if FareCalc currency and BaseFare currency is the same).
     *
     * @param float $rOE
     *
     * @return self
     */
    public function setROE(float $rOE): self
    {
        $this->rOE = $rOE;

        return $this;
    }

    /**
     * Validating carrier.
     *
     * @return string
     */
    public function getValidatingCarrier(): string
    {
        return $this->validatingCarrier;
    }

    /**
     * Validating carrier.
     *
     * @param string $validatingCarrier
     *
     * @return self
     */
    public function setValidatingCarrier(string $validatingCarrier): self
    {
        $this->validatingCarrier = $validatingCarrier;

        return $this;
    }
}
