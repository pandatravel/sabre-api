<?php

namespace Ammonkc\SabreApi\Model\OrderManagement;

use Ammonkc\SabreApi\AbstractModel;

class FareDetail extends AbstractModel
{
    /**
     * Indicator for MIP originated solutions. If an MIP originated solution, set to true. For LCC, set to false.
     *
     * @var bool
     */
    protected $filedFareInd;
    /**
     * Alphabetic or alpha-numeric code used by airlines to identify the fare type.
     *
     * @var string
     */
    protected $fareIndicatorCode;
    /**
     * The tour code associated with the fare, if applicable.
     *
     * @var string
     */
    protected $tourCode;
    /**
     * List of unique passenger identifiers the fare is applicable to.
     *
     * @var string[]
     */
    protected $paxRefIds;
    /**
     * Contains the amount of money expected, required, or given in payment.
     *
     * @var Price
     */
    protected $price;
    /**
     * Contains monetary information.
     *
     * @var AmountCurrency
     */
    protected $commissionAmount;
    /**
     * The percentage of the commission in numeric decimal format.
     *
     * @var float
     */
    protected $commissionPercentage;
    /**
     * The source of the commission.
     *
     * @var string
     */
    protected $commissionSource;
    /**
     * @var FareComponent[]
     */
    protected $fareComponents;
    /**
     * @var FareRemark[]
     */
    protected $remarks;

    /**
     * Indicator for MIP originated solutions. If an MIP originated solution, set to true. For LCC, set to false.
     *
     * @return bool
     */
    public function getFiledFareInd(): ?bool
    {
        return $this->filedFareInd;
    }

    /**
     * Indicator for MIP originated solutions. If an MIP originated solution, set to true. For LCC, set to false.
     *
     * @param bool $filedFareInd
     *
     * @return self
     */
    public function setFiledFareInd(?bool $filedFareInd): self
    {
        $this->filedFareInd = $filedFareInd;

        return $this;
    }

    /**
     * Alphabetic or alpha-numeric code used by airlines to identify the fare type.
     *
     * @return string
     */
    public function getFareIndicatorCode(): ?string
    {
        return $this->fareIndicatorCode;
    }

    /**
     * Alphabetic or alpha-numeric code used by airlines to identify the fare type.
     *
     * @param string $fareIndicatorCode
     *
     * @return self
     */
    public function setFareIndicatorCode(?string $fareIndicatorCode): self
    {
        $this->fareIndicatorCode = $fareIndicatorCode;

        return $this;
    }

    /**
     * The tour code associated with the fare, if applicable.
     *
     * @return string
     */
    public function getTourCode(): ?string
    {
        return $this->tourCode;
    }

    /**
     * The tour code associated with the fare, if applicable.
     *
     * @param string $tourCode
     *
     * @return self
     */
    public function setTourCode(?string $tourCode): self
    {
        $this->tourCode = $tourCode;

        return $this;
    }

    /**
     * List of unique passenger identifiers the fare is applicable to.
     *
     * @return string[]
     */
    public function getPaxRefIds(): ?array
    {
        return $this->paxRefIds;
    }

    /**
     * List of unique passenger identifiers the fare is applicable to.
     *
     * @param string[] $paxRefIds
     *
     * @return self
     */
    public function setPaxRefIds(?array $paxRefIds): self
    {
        $this->paxRefIds = $paxRefIds;

        return $this;
    }

    /**
     * Contains the amount of money expected, required, or given in payment.
     *
     * @return Price
     */
    public function getPrice(): ?Price
    {
        return $this->price;
    }

    /**
     * Contains the amount of money expected, required, or given in payment.
     *
     * @param Price $price
     *
     * @return self
     */
    public function setPrice(?Price $price): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Contains monetary information.
     *
     * @return AmountCurrency
     */
    public function getCommissionAmount(): ?AmountCurrency
    {
        return $this->commissionAmount;
    }

    /**
     * Contains monetary information.
     *
     * @param AmountCurrency $commissionAmount
     *
     * @return self
     */
    public function setCommissionAmount(?AmountCurrency $commissionAmount): self
    {
        $this->commissionAmount = $commissionAmount;

        return $this;
    }

    /**
     * The percentage of the commission in numeric decimal format.
     *
     * @return float
     */
    public function getCommissionPercentage(): ?float
    {
        return $this->commissionPercentage;
    }

    /**
     * The percentage of the commission in numeric decimal format.
     *
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
     * The source of the commission.
     *
     * @return string
     */
    public function getCommissionSource(): ?string
    {
        return $this->commissionSource;
    }

    /**
     * The source of the commission.
     *
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
     * @return FareComponent[]
     */
    public function getFareComponents(): ?array
    {
        return $this->fareComponents;
    }

    /**
     * @param FareComponent[] $fareComponents
     *
     * @return self
     */
    public function setFareComponents(?array $fareComponents): self
    {
        $this->fareComponents = $fareComponents;

        return $this;
    }

    /**
     * @return FareRemark[]
     */
    public function getRemarks(): ?array
    {
        return $this->remarks;
    }

    /**
     * @param FareRemark[] $remarks
     *
     * @return self
     */
    public function setRemarks(?array $remarks): self
    {
        $this->remarks = $remarks;

        return $this;
    }
}
