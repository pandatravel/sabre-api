<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class SellingFareDataType extends AbstractModel
{
    /**
     * Base Fare Amount.
     *
     * @var float
     */
    protected $baseFareAmount;
    /**
     * Constructed Total Amount.
     *
     * @var float
     */
    protected $constructedTotalAmount;
    /**
     * Equivalent Amount.
     *
     * @var float
     */
    protected $equivalentAmount;
    /**
     * Fare Calulation.
     *
     * @var string
     */
    protected $fareCalculation;
    /**
     * Indicates whether a Fare Retailer-Selling level rule was applied.
     *
     * @var bool
     */
    protected $fareRetailerRule;
    /**
     * Description of the handling markup.
     *
     * @var HandlingMarkupType[]
     */
    protected $handlingMarkups;
    /**
     * Tax summary information.
     *
     * @var TaxSummaryIDType[]
     */
    protected $taxSummaries;
    /**
     * Collection of taxes.
     *
     * @var TaxIDType[]
     */
    protected $taxes;
    /**
     * Total Per Passenger.
     *
     * @var float
     */
    protected $totalPerPassenger;
    /**
     * Total Tax Amount.
     *
     * @var float
     */
    protected $totalTaxAmount;
    /**
     * Tax.
     *
     * @var string
     */
    protected $type;

    /**
     * Base Fare Amount.
     *
     * @return float
     */
    public function getBaseFareAmount(): float
    {
        return $this->baseFareAmount;
    }

    /**
     * Base Fare Amount.
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
     * Constructed Total Amount.
     *
     * @return float
     */
    public function getConstructedTotalAmount(): float
    {
        return $this->constructedTotalAmount;
    }

    /**
     * Constructed Total Amount.
     *
     * @param float $constructedTotalAmount
     *
     * @return self
     */
    public function setConstructedTotalAmount(float $constructedTotalAmount): self
    {
        $this->constructedTotalAmount = $constructedTotalAmount;

        return $this;
    }

    /**
     * Equivalent Amount.
     *
     * @return float
     */
    public function getEquivalentAmount(): float
    {
        return $this->equivalentAmount;
    }

    /**
     * Equivalent Amount.
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
     * Fare Calulation.
     *
     * @return string
     */
    public function getFareCalculation(): string
    {
        return $this->fareCalculation;
    }

    /**
     * Fare Calulation.
     *
     * @param string $fareCalculation
     *
     * @return self
     */
    public function setFareCalculation(string $fareCalculation): self
    {
        $this->fareCalculation = $fareCalculation;

        return $this;
    }

    /**
     * Indicates whether a Fare Retailer-Selling level rule was applied.
     *
     * @return bool
     */
    public function getFareRetailerRule(): bool
    {
        return $this->fareRetailerRule;
    }

    /**
     * Indicates whether a Fare Retailer-Selling level rule was applied.
     *
     * @param bool $fareRetailerRule
     *
     * @return self
     */
    public function setFareRetailerRule(bool $fareRetailerRule): self
    {
        $this->fareRetailerRule = $fareRetailerRule;

        return $this;
    }

    /**
     * Description of the handling markup.
     *
     * @return HandlingMarkupType[]
     */
    public function getHandlingMarkups(): array
    {
        return $this->handlingMarkups;
    }

    /**
     * Description of the handling markup.
     *
     * @param HandlingMarkupType[] $handlingMarkups
     *
     * @return self
     */
    public function setHandlingMarkups(array $handlingMarkups): self
    {
        $this->handlingMarkups = $handlingMarkups;

        return $this;
    }

    /**
     * Tax summary information.
     *
     * @return TaxSummaryIDType[]
     */
    public function getTaxSummaries(): array
    {
        return $this->taxSummaries;
    }

    /**
     * Tax summary information.
     *
     * @param TaxSummaryIDType[] $taxSummaries
     *
     * @return self
     */
    public function setTaxSummaries(array $taxSummaries): self
    {
        $this->taxSummaries = $taxSummaries;

        return $this;
    }

    /**
     * Collection of taxes.
     *
     * @return TaxIDType[]
     */
    public function getTaxes(): array
    {
        return $this->taxes;
    }

    /**
     * Collection of taxes.
     *
     * @param TaxIDType[] $taxes
     *
     * @return self
     */
    public function setTaxes(array $taxes): self
    {
        $this->taxes = $taxes;

        return $this;
    }

    /**
     * Total Per Passenger.
     *
     * @return float
     */
    public function getTotalPerPassenger(): float
    {
        return $this->totalPerPassenger;
    }

    /**
     * Total Per Passenger.
     *
     * @param float $totalPerPassenger
     *
     * @return self
     */
    public function setTotalPerPassenger(float $totalPerPassenger): self
    {
        $this->totalPerPassenger = $totalPerPassenger;

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
     * Tax.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Tax.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
