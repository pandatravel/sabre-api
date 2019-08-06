<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class FareComponentBreakdownType extends AbstractModel
{
    /**
     * Commission contract family ID.
     *
     * @var int
     */
    protected $contractFamilyId;
    /**
     * Commission contract ID.
     *
     * @var int
     */
    protected $contractId;
    /**
     * Earned commission amount per fare component.
     *
     * @var float
     */
    protected $earnedFareComponentCommission;
    /**
     * Commission amount per fare component.
     *
     * @var float
     */
    protected $fareComponentCommission;
    /**
     * Fare Component Reference ID.
     *
     * @var int
     */
    protected $fareComponentReferenceId;
    /**
     * Commission method ID.
     *
     * @var int
     */
    protected $methodId;
    /**
     * Commission rule family ID.
     *
     * @var int
     */
    protected $ruleFamilyId;
    /**
     * Commission rule ID.
     *
     * @var int
     */
    protected $ruleId;

    /**
     * Commission contract family ID.
     *
     * @return int
     */
    public function getContractFamilyId(): int
    {
        return $this->contractFamilyId;
    }

    /**
     * Commission contract family ID.
     *
     * @param int $contractFamilyId
     *
     * @return self
     */
    public function setContractFamilyId(int $contractFamilyId): self
    {
        $this->contractFamilyId = $contractFamilyId;

        return $this;
    }

    /**
     * Commission contract ID.
     *
     * @return int
     */
    public function getContractId(): int
    {
        return $this->contractId;
    }

    /**
     * Commission contract ID.
     *
     * @param int $contractId
     *
     * @return self
     */
    public function setContractId(int $contractId): self
    {
        $this->contractId = $contractId;

        return $this;
    }

    /**
     * Earned commission amount per fare component.
     *
     * @return float
     */
    public function getEarnedFareComponentCommission(): float
    {
        return $this->earnedFareComponentCommission;
    }

    /**
     * Earned commission amount per fare component.
     *
     * @param float $earnedFareComponentCommission
     *
     * @return self
     */
    public function setEarnedFareComponentCommission(float $earnedFareComponentCommission): self
    {
        $this->earnedFareComponentCommission = $earnedFareComponentCommission;

        return $this;
    }

    /**
     * Commission amount per fare component.
     *
     * @return float
     */
    public function getFareComponentCommission(): float
    {
        return $this->fareComponentCommission;
    }

    /**
     * Commission amount per fare component.
     *
     * @param float $fareComponentCommission
     *
     * @return self
     */
    public function setFareComponentCommission(float $fareComponentCommission): self
    {
        $this->fareComponentCommission = $fareComponentCommission;

        return $this;
    }

    /**
     * Fare Component Reference ID.
     *
     * @return int
     */
    public function getFareComponentReferenceId(): int
    {
        return $this->fareComponentReferenceId;
    }

    /**
     * Fare Component Reference ID.
     *
     * @param int $fareComponentReferenceId
     *
     * @return self
     */
    public function setFareComponentReferenceId(int $fareComponentReferenceId): self
    {
        $this->fareComponentReferenceId = $fareComponentReferenceId;

        return $this;
    }

    /**
     * Commission method ID.
     *
     * @return int
     */
    public function getMethodId(): int
    {
        return $this->methodId;
    }

    /**
     * Commission method ID.
     *
     * @param int $methodId
     *
     * @return self
     */
    public function setMethodId(int $methodId): self
    {
        $this->methodId = $methodId;

        return $this;
    }

    /**
     * Commission rule family ID.
     *
     * @return int
     */
    public function getRuleFamilyId(): int
    {
        return $this->ruleFamilyId;
    }

    /**
     * Commission rule family ID.
     *
     * @param int $ruleFamilyId
     *
     * @return self
     */
    public function setRuleFamilyId(int $ruleFamilyId): self
    {
        $this->ruleFamilyId = $ruleFamilyId;

        return $this;
    }

    /**
     * Commission rule ID.
     *
     * @return int
     */
    public function getRuleId(): int
    {
        return $this->ruleId;
    }

    /**
     * Commission rule ID.
     *
     * @param int $ruleId
     *
     * @return self
     */
    public function setRuleId(int $ruleId): self
    {
        $this->ruleId = $ruleId;

        return $this;
    }
}
