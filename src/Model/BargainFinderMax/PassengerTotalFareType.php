<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class PassengerTotalFareType extends AbstractModel
{
    /**
     * @var float
     */
    protected $baseFareAmount;
    /**
     * @var string
     */
    protected $baseFareCurrency;
    /**
     * @var float
     */
    protected $bookingFeeAmount;
    /**
     * @var float
     */
    protected $cat35CommissionAmount;
    /**
     * @var float
     */
    protected $cat35CommissionPercentage;
    /**
     * @var float
     */
    protected $cat35MarkupAmount;
    /**
     * @var float
     */
    protected $commissionAmount;
    /**
     * @var float
     */
    protected $commissionAmountInEquivalent;
    /**
     * @var float
     */
    protected $commissionPercentage;
    /**
     * @var string
     */
    protected $commissionSource;
    /**
     * @var float
     */
    protected $constructionAmount;
    /**
     * @var string
     */
    protected $constructionCurrency;
    /**
     * @var float
     */
    protected $creditCardFeeAmount;
    /**
     * @var string
     */
    protected $currency;
    /**
     * @var string
     */
    protected $effectiveDeviationType;
    /**
     * @var float
     */
    protected $effectivePriceDeviation;
    /**
     * @var float
     */
    protected $equivalentAmount;
    /**
     * @var string
     */
    protected $equivalentCurrency;
    /**
     * @var float
     */
    protected $exchangeRateOne;
    /**
     * @var float
     */
    protected $noMarkupBaseFareAmount;
    /**
     * @var float
     */
    protected $stopoverChargeAmount;
    /**
     * @var float
     */
    protected $totalFare;
    /**
     * @var float
     */
    protected $totalTaxAmount;
    /**
     * @var float
     */
    protected $totalTtypeObFee;

    /**
     * @return float
     */
    public function getBaseFareAmount(): ?float
    {
        return $this->baseFareAmount;
    }

    /**
     * @param float $baseFareAmount
     *
     * @return self
     */
    public function setBaseFareAmount(?float $baseFareAmount): self
    {
        $this->baseFareAmount = $baseFareAmount;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseFareCurrency(): ?string
    {
        return $this->baseFareCurrency;
    }

    /**
     * @param string $baseFareCurrency
     *
     * @return self
     */
    public function setBaseFareCurrency(?string $baseFareCurrency): self
    {
        $this->baseFareCurrency = $baseFareCurrency;

        return $this;
    }

    /**
     * @return float
     */
    public function getBookingFeeAmount(): ?float
    {
        return $this->bookingFeeAmount;
    }

    /**
     * @param float $bookingFeeAmount
     *
     * @return self
     */
    public function setBookingFeeAmount(?float $bookingFeeAmount): self
    {
        $this->bookingFeeAmount = $bookingFeeAmount;

        return $this;
    }

    /**
     * @return float
     */
    public function getCat35CommissionAmount(): ?float
    {
        return $this->cat35CommissionAmount;
    }

    /**
     * @param float $cat35CommissionAmount
     *
     * @return self
     */
    public function setCat35CommissionAmount(?float $cat35CommissionAmount): self
    {
        $this->cat35CommissionAmount = $cat35CommissionAmount;

        return $this;
    }

    /**
     * @return float
     */
    public function getCat35CommissionPercentage(): ?float
    {
        return $this->cat35CommissionPercentage;
    }

    /**
     * @param float $cat35CommissionPercentage
     *
     * @return self
     */
    public function setCat35CommissionPercentage(?float $cat35CommissionPercentage): self
    {
        $this->cat35CommissionPercentage = $cat35CommissionPercentage;

        return $this;
    }

    /**
     * @return float
     */
    public function getCat35MarkupAmount(): ?float
    {
        return $this->cat35MarkupAmount;
    }

    /**
     * @param float $cat35MarkupAmount
     *
     * @return self
     */
    public function setCat35MarkupAmount(?float $cat35MarkupAmount): self
    {
        $this->cat35MarkupAmount = $cat35MarkupAmount;

        return $this;
    }

    /**
     * @return float
     */
    public function getCommissionAmount(): ?float
    {
        return $this->commissionAmount;
    }

    /**
     * @param float $commissionAmount
     *
     * @return self
     */
    public function setCommissionAmount(?float $commissionAmount): self
    {
        $this->commissionAmount = $commissionAmount;

        return $this;
    }

    /**
     * @return float
     */
    public function getCommissionAmountInEquivalent(): ?float
    {
        return $this->commissionAmountInEquivalent;
    }

    /**
     * @param float $commissionAmountInEquivalent
     *
     * @return self
     */
    public function setCommissionAmountInEquivalent(?float $commissionAmountInEquivalent): self
    {
        $this->commissionAmountInEquivalent = $commissionAmountInEquivalent;

        return $this;
    }

    /**
     * @return float
     */
    public function getCommissionPercentage(): ?float
    {
        return $this->commissionPercentage;
    }

    /**
     * @param float $commissionPercentage
     *
     * @return self
     */
    public function setCommissionPercentage(?float $commissionPercentage): self
    {
        $this->commissionPercentage = $commissionPercentage;

        return $this;
    }

    /**
     * @return string
     */
    public function getCommissionSource(): ?string
    {
        return $this->commissionSource;
    }

    /**
     * @param string $commissionSource
     *
     * @return self
     */
    public function setCommissionSource(?string $commissionSource): self
    {
        $this->commissionSource = $commissionSource;

        return $this;
    }

    /**
     * @return float
     */
    public function getConstructionAmount(): ?float
    {
        return $this->constructionAmount;
    }

    /**
     * @param float $constructionAmount
     *
     * @return self
     */
    public function setConstructionAmount(?float $constructionAmount): self
    {
        $this->constructionAmount = $constructionAmount;

        return $this;
    }

    /**
     * @return string
     */
    public function getConstructionCurrency(): ?string
    {
        return $this->constructionCurrency;
    }

    /**
     * @param string $constructionCurrency
     *
     * @return self
     */
    public function setConstructionCurrency(?string $constructionCurrency): self
    {
        $this->constructionCurrency = $constructionCurrency;

        return $this;
    }

    /**
     * @return float
     */
    public function getCreditCardFeeAmount(): ?float
    {
        return $this->creditCardFeeAmount;
    }

    /**
     * @param float $creditCardFeeAmount
     *
     * @return self
     */
    public function setCreditCardFeeAmount(?float $creditCardFeeAmount): self
    {
        $this->creditCardFeeAmount = $creditCardFeeAmount;

        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     *
     * @return self
     */
    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @return string
     */
    public function getEffectiveDeviationType(): ?string
    {
        return $this->effectiveDeviationType;
    }

    /**
     * @param string $effectiveDeviationType
     *
     * @return self
     */
    public function setEffectiveDeviationType(?string $effectiveDeviationType): self
    {
        $this->effectiveDeviationType = $effectiveDeviationType;

        return $this;
    }

    /**
     * @return float
     */
    public function getEffectivePriceDeviation(): ?float
    {
        return $this->effectivePriceDeviation;
    }

    /**
     * @param float $effectivePriceDeviation
     *
     * @return self
     */
    public function setEffectivePriceDeviation(?float $effectivePriceDeviation): self
    {
        $this->effectivePriceDeviation = $effectivePriceDeviation;

        return $this;
    }

    /**
     * @return float
     */
    public function getEquivalentAmount(): ?float
    {
        return $this->equivalentAmount;
    }

    /**
     * @param float $equivalentAmount
     *
     * @return self
     */
    public function setEquivalentAmount(?float $equivalentAmount): self
    {
        $this->equivalentAmount = $equivalentAmount;

        return $this;
    }

    /**
     * @return string
     */
    public function getEquivalentCurrency(): ?string
    {
        return $this->equivalentCurrency;
    }

    /**
     * @param string $equivalentCurrency
     *
     * @return self
     */
    public function setEquivalentCurrency(?string $equivalentCurrency): self
    {
        $this->equivalentCurrency = $equivalentCurrency;

        return $this;
    }

    /**
     * @return float
     */
    public function getExchangeRateOne(): ?float
    {
        return $this->exchangeRateOne;
    }

    /**
     * @param float $exchangeRateOne
     *
     * @return self
     */
    public function setExchangeRateOne(?float $exchangeRateOne): self
    {
        $this->exchangeRateOne = $exchangeRateOne;

        return $this;
    }

    /**
     * @return float
     */
    public function getNoMarkupBaseFareAmount(): ?float
    {
        return $this->noMarkupBaseFareAmount;
    }

    /**
     * @param float $noMarkupBaseFareAmount
     *
     * @return self
     */
    public function setNoMarkupBaseFareAmount(?float $noMarkupBaseFareAmount): self
    {
        $this->noMarkupBaseFareAmount = $noMarkupBaseFareAmount;

        return $this;
    }

    /**
     * @return float
     */
    public function getStopoverChargeAmount(): ?float
    {
        return $this->stopoverChargeAmount;
    }

    /**
     * @param float $stopoverChargeAmount
     *
     * @return self
     */
    public function setStopoverChargeAmount(?float $stopoverChargeAmount): self
    {
        $this->stopoverChargeAmount = $stopoverChargeAmount;

        return $this;
    }

    /**
     * @return float
     */
    public function getTotalFare(): ?float
    {
        return $this->totalFare;
    }

    /**
     * @param float $totalFare
     *
     * @return self
     */
    public function setTotalFare(?float $totalFare): self
    {
        $this->totalFare = $totalFare;

        return $this;
    }

    /**
     * @return float
     */
    public function getTotalTaxAmount(): ?float
    {
        return $this->totalTaxAmount;
    }

    /**
     * @param float $totalTaxAmount
     *
     * @return self
     */
    public function setTotalTaxAmount(?float $totalTaxAmount): self
    {
        $this->totalTaxAmount = $totalTaxAmount;

        return $this;
    }

    /**
     * @return float
     */
    public function getTotalTtypeObFee(): ?float
    {
        return $this->totalTtypeObFee;
    }

    /**
     * @param float $totalTtypeObFee
     *
     * @return self
     */
    public function setTotalTtypeObFee(?float $totalTtypeObFee): self
    {
        $this->totalTtypeObFee = $totalTtypeObFee;

        return $this;
    }
}
