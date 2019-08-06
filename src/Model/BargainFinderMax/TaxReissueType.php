<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class TaxReissueType extends AbstractModel
{
    /**
     * @var float
     */
    protected $maxAmount;
    /**
     * @var string
     */
    protected $maxCurrency;
    /**
     * @var bool
     */
    protected $refundable;
    /**
     * @var bool
     */
    protected $restrictionApply;
    /**
     * @var string
     */
    protected $taxType;

    /**
     * @return float
     */
    public function getMaxAmount(): float
    {
        return $this->maxAmount;
    }

    /**
     * @param float $maxAmount
     *
     * @return self
     */
    public function setMaxAmount(float $maxAmount): self
    {
        $this->maxAmount = $maxAmount;

        return $this;
    }

    /**
     * @return string
     */
    public function getMaxCurrency(): string
    {
        return $this->maxCurrency;
    }

    /**
     * @param string $maxCurrency
     *
     * @return self
     */
    public function setMaxCurrency(string $maxCurrency): self
    {
        $this->maxCurrency = $maxCurrency;

        return $this;
    }

    /**
     * @return bool
     */
    public function getRefundable(): bool
    {
        return $this->refundable;
    }

    /**
     * @param bool $refundable
     *
     * @return self
     */
    public function setRefundable(bool $refundable): self
    {
        $this->refundable = $refundable;

        return $this;
    }

    /**
     * @return bool
     */
    public function getRestrictionApply(): bool
    {
        return $this->restrictionApply;
    }

    /**
     * @param bool $restrictionApply
     *
     * @return self
     */
    public function setRestrictionApply(bool $restrictionApply): self
    {
        $this->restrictionApply = $restrictionApply;

        return $this;
    }

    /**
     * @return string
     */
    public function getTaxType(): string
    {
        return $this->taxType;
    }

    /**
     * @param string $taxType
     *
     * @return self
     */
    public function setTaxType(string $taxType): self
    {
        $this->taxType = $taxType;

        return $this;
    }
}
