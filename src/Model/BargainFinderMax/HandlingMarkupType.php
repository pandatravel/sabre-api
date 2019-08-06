<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class HandlingMarkupType extends AbstractModel
{
    /**
     * @var float
     */
    protected $amount;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $extendedDescription;
    /**
     * @var bool
     */
    protected $fareRetailerRule;
    /**
     * @var bool
     */
    protected $hiddenHandlingFee;
    /**
     * @var bool
     */
    protected $nonHiddenHandlingFee;
    /**
     * @var string
     */
    protected $type;

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     *
     * @return self
     */
    public function setAmount(float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getExtendedDescription(): string
    {
        return $this->extendedDescription;
    }

    /**
     * @param string $extendedDescription
     *
     * @return self
     */
    public function setExtendedDescription(string $extendedDescription): self
    {
        $this->extendedDescription = $extendedDescription;

        return $this;
    }

    /**
     * @return bool
     */
    public function getFareRetailerRule(): bool
    {
        return $this->fareRetailerRule;
    }

    /**
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
     * @return bool
     */
    public function getHiddenHandlingFee(): bool
    {
        return $this->hiddenHandlingFee;
    }

    /**
     * @param bool $hiddenHandlingFee
     *
     * @return self
     */
    public function setHiddenHandlingFee(bool $hiddenHandlingFee): self
    {
        $this->hiddenHandlingFee = $hiddenHandlingFee;

        return $this;
    }

    /**
     * @return bool
     */
    public function getNonHiddenHandlingFee(): bool
    {
        return $this->nonHiddenHandlingFee;
    }

    /**
     * @param bool $nonHiddenHandlingFee
     *
     * @return self
     */
    public function setNonHiddenHandlingFee(bool $nonHiddenHandlingFee): self
    {
        $this->nonHiddenHandlingFee = $nonHiddenHandlingFee;

        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
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
