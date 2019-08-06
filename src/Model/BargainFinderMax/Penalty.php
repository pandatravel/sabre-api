<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class Penalty extends AbstractModel
{
    /**
     * @var float
     */
    protected $amount;
    /**
     * @var string
     */
    protected $applicability;
    /**
     * @var bool
     */
    protected $cat16Info;
    /**
     * @var Cat16TextOnly[]
     */
    protected $cat16TextOnly;
    /**
     * @var bool
     */
    protected $changeable;
    /**
     * @var bool
     */
    protected $conditionsApply;
    /**
     * @var string
     */
    protected $currency;
    /**
     * @var bool
     */
    protected $refundable;
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
    public function getApplicability(): string
    {
        return $this->applicability;
    }

    /**
     * @param string $applicability
     *
     * @return self
     */
    public function setApplicability(string $applicability): self
    {
        $this->applicability = $applicability;

        return $this;
    }

    /**
     * @return bool
     */
    public function getCat16Info(): bool
    {
        return $this->cat16Info;
    }

    /**
     * @param bool $cat16Info
     *
     * @return self
     */
    public function setCat16Info(bool $cat16Info): self
    {
        $this->cat16Info = $cat16Info;

        return $this;
    }

    /**
     * @return Cat16TextOnly[]
     */
    public function getCat16TextOnly(): array
    {
        return $this->cat16TextOnly;
    }

    /**
     * @param Cat16TextOnly[] $cat16TextOnly
     *
     * @return self
     */
    public function setCat16TextOnly(array $cat16TextOnly): self
    {
        $this->cat16TextOnly = $cat16TextOnly;

        return $this;
    }

    /**
     * @return bool
     */
    public function getChangeable(): bool
    {
        return $this->changeable;
    }

    /**
     * @param bool $changeable
     *
     * @return self
     */
    public function setChangeable(bool $changeable): self
    {
        $this->changeable = $changeable;

        return $this;
    }

    /**
     * @return bool
     */
    public function getConditionsApply(): bool
    {
        return $this->conditionsApply;
    }

    /**
     * @param bool $conditionsApply
     *
     * @return self
     */
    public function setConditionsApply(bool $conditionsApply): self
    {
        $this->conditionsApply = $conditionsApply;

        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
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
