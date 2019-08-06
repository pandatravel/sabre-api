<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class ValidatingCarrierCommissionInfoType extends AbstractModel
{
    /**
     * Commission amount in equivalent amount currency.
     *
     * @var float
     */
    protected $commissionAmount;
    /**
     * Commission contract qualifier.
     *
     * @var string
     */
    protected $commissionContractQualifier;
    /**
     * Commission amount in equivalent amount currency.
     *
     * @var float
     */
    protected $commissionPercent;
    /**
     * Earned commission amount in equivalent amount currency.
     *
     * @var float
     */
    protected $earnedCommissionAmount;
    /**
     * Fare Component Breakdown.
     *
     * @var FareComponentBreakdownType[]
     */
    protected $fareComponentBreakdowns;
    /**
     * Source PCC.
     *
     * @var string
     */
    protected $sourcePcc;
    /**
     * Total commission amount including mark-up.
     *
     * @var float
     */
    protected $totalAmountIncludingMarkUp;
    /**
     * Validating Carrier Code.
     *
     * @var string
     */
    protected $validatingCarrier;

    /**
     * Commission amount in equivalent amount currency.
     *
     * @return float
     */
    public function getCommissionAmount(): float
    {
        return $this->commissionAmount;
    }

    /**
     * Commission amount in equivalent amount currency.
     *
     * @param float $commissionAmount
     *
     * @return self
     */
    public function setCommissionAmount(float $commissionAmount): self
    {
        $this->commissionAmount = $commissionAmount;

        return $this;
    }

    /**
     * Commission contract qualifier.
     *
     * @return string
     */
    public function getCommissionContractQualifier(): string
    {
        return $this->commissionContractQualifier;
    }

    /**
     * Commission contract qualifier.
     *
     * @param string $commissionContractQualifier
     *
     * @return self
     */
    public function setCommissionContractQualifier(string $commissionContractQualifier): self
    {
        $this->commissionContractQualifier = $commissionContractQualifier;

        return $this;
    }

    /**
     * Commission amount in equivalent amount currency.
     *
     * @return float
     */
    public function getCommissionPercent(): float
    {
        return $this->commissionPercent;
    }

    /**
     * Commission amount in equivalent amount currency.
     *
     * @param float $commissionPercent
     *
     * @return self
     */
    public function setCommissionPercent(float $commissionPercent): self
    {
        $this->commissionPercent = $commissionPercent;

        return $this;
    }

    /**
     * Earned commission amount in equivalent amount currency.
     *
     * @return float
     */
    public function getEarnedCommissionAmount(): float
    {
        return $this->earnedCommissionAmount;
    }

    /**
     * Earned commission amount in equivalent amount currency.
     *
     * @param float $earnedCommissionAmount
     *
     * @return self
     */
    public function setEarnedCommissionAmount(float $earnedCommissionAmount): self
    {
        $this->earnedCommissionAmount = $earnedCommissionAmount;

        return $this;
    }

    /**
     * Fare Component Breakdown.
     *
     * @return FareComponentBreakdownType[]
     */
    public function getFareComponentBreakdowns(): array
    {
        return $this->fareComponentBreakdowns;
    }

    /**
     * Fare Component Breakdown.
     *
     * @param FareComponentBreakdownType[] $fareComponentBreakdowns
     *
     * @return self
     */
    public function setFareComponentBreakdowns(array $fareComponentBreakdowns): self
    {
        $this->fareComponentBreakdowns = $fareComponentBreakdowns;

        return $this;
    }

    /**
     * Source PCC.
     *
     * @return string
     */
    public function getSourcePcc(): string
    {
        return $this->sourcePcc;
    }

    /**
     * Source PCC.
     *
     * @param string $sourcePcc
     *
     * @return self
     */
    public function setSourcePcc(string $sourcePcc): self
    {
        $this->sourcePcc = $sourcePcc;

        return $this;
    }

    /**
     * Total commission amount including mark-up.
     *
     * @return float
     */
    public function getTotalAmountIncludingMarkUp(): float
    {
        return $this->totalAmountIncludingMarkUp;
    }

    /**
     * Total commission amount including mark-up.
     *
     * @param float $totalAmountIncludingMarkUp
     *
     * @return self
     */
    public function setTotalAmountIncludingMarkUp(float $totalAmountIncludingMarkUp): self
    {
        $this->totalAmountIncludingMarkUp = $totalAmountIncludingMarkUp;

        return $this;
    }

    /**
     * Validating Carrier Code.
     *
     * @return string
     */
    public function getValidatingCarrier(): string
    {
        return $this->validatingCarrier;
    }

    /**
     * Validating Carrier Code.
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
