<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class HandlingMarkupDetailType extends AbstractModel
{
    /**
     * @var string
     */
    protected $amountCurrency;
    /**
     * @var float
     */
    protected $fareAmountAfterMarkup;
    /**
     * @var float
     */
    protected $markupAmount;
    /**
     * @var string
     */
    protected $markupHandlingFeeAppId;
    /**
     * @var int
     */
    protected $markupRuleItemNumber;
    /**
     * @var string
     */
    protected $markupRuleSourcePcc;
    /**
     * @var string
     */
    protected $markupTypeCode;
    /**
     * @var string
     */
    protected $retailerRuleQualifier;

    /**
     * @return string
     */
    public function getAmountCurrency(): string
    {
        return $this->amountCurrency;
    }

    /**
     * @param string $amountCurrency
     *
     * @return self
     */
    public function setAmountCurrency(string $amountCurrency): self
    {
        $this->amountCurrency = $amountCurrency;

        return $this;
    }

    /**
     * @return float
     */
    public function getFareAmountAfterMarkup(): float
    {
        return $this->fareAmountAfterMarkup;
    }

    /**
     * @param float $fareAmountAfterMarkup
     *
     * @return self
     */
    public function setFareAmountAfterMarkup(float $fareAmountAfterMarkup): self
    {
        $this->fareAmountAfterMarkup = $fareAmountAfterMarkup;

        return $this;
    }

    /**
     * @return float
     */
    public function getMarkupAmount(): float
    {
        return $this->markupAmount;
    }

    /**
     * @param float $markupAmount
     *
     * @return self
     */
    public function setMarkupAmount(float $markupAmount): self
    {
        $this->markupAmount = $markupAmount;

        return $this;
    }

    /**
     * @return string
     */
    public function getMarkupHandlingFeeAppId(): string
    {
        return $this->markupHandlingFeeAppId;
    }

    /**
     * @param string $markupHandlingFeeAppId
     *
     * @return self
     */
    public function setMarkupHandlingFeeAppId(string $markupHandlingFeeAppId): self
    {
        $this->markupHandlingFeeAppId = $markupHandlingFeeAppId;

        return $this;
    }

    /**
     * @return int
     */
    public function getMarkupRuleItemNumber(): int
    {
        return $this->markupRuleItemNumber;
    }

    /**
     * @param int $markupRuleItemNumber
     *
     * @return self
     */
    public function setMarkupRuleItemNumber(int $markupRuleItemNumber): self
    {
        $this->markupRuleItemNumber = $markupRuleItemNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getMarkupRuleSourcePcc(): string
    {
        return $this->markupRuleSourcePcc;
    }

    /**
     * @param string $markupRuleSourcePcc
     *
     * @return self
     */
    public function setMarkupRuleSourcePcc(string $markupRuleSourcePcc): self
    {
        $this->markupRuleSourcePcc = $markupRuleSourcePcc;

        return $this;
    }

    /**
     * @return string
     */
    public function getMarkupTypeCode(): string
    {
        return $this->markupTypeCode;
    }

    /**
     * @param string $markupTypeCode
     *
     * @return self
     */
    public function setMarkupTypeCode(string $markupTypeCode): self
    {
        $this->markupTypeCode = $markupTypeCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getRetailerRuleQualifier(): string
    {
        return $this->retailerRuleQualifier;
    }

    /**
     * @param string $retailerRuleQualifier
     *
     * @return self
     */
    public function setRetailerRuleQualifier(string $retailerRuleQualifier): self
    {
        $this->retailerRuleQualifier = $retailerRuleQualifier;

        return $this;
    }
}
