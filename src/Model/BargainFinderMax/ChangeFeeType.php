<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class ChangeFeeType extends AbstractModel
{
    /**
     * Change fee amount.
     *
     * @var float
     */
    protected $amount;
    /**
     * Change fee currency.
     *
     * @var string
     */
    protected $currency;
    /**
     * Highest change fee indicator.
     *
     * @var bool
     */
    protected $highest;
    /**
     * Change fee not applicable.
     *
     * @var bool
     */
    protected $notApplicable;
    /**
     * Change fee waived.
     *
     * @var bool
     */
    protected $waived;

    /**
     * Change fee amount.
     *
     * @return float
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * Change fee amount.
     *
     * @param float $amount
     *
     * @return self
     */
    public function setAmount(?float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Change fee currency.
     *
     * @return string
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Change fee currency.
     *
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
     * Highest change fee indicator.
     *
     * @return bool
     */
    public function getHighest(): ?bool
    {
        return $this->highest;
    }

    /**
     * Highest change fee indicator.
     *
     * @param bool $highest
     *
     * @return self
     */
    public function setHighest(?bool $highest): self
    {
        $this->highest = $highest;

        return $this;
    }

    /**
     * Change fee not applicable.
     *
     * @return bool
     */
    public function getNotApplicable(): ?bool
    {
        return $this->notApplicable;
    }

    /**
     * Change fee not applicable.
     *
     * @param bool $notApplicable
     *
     * @return self
     */
    public function setNotApplicable(?bool $notApplicable): self
    {
        $this->notApplicable = $notApplicable;

        return $this;
    }

    /**
     * Change fee waived.
     *
     * @return bool
     */
    public function getWaived(): ?bool
    {
        return $this->waived;
    }

    /**
     * Change fee waived.
     *
     * @param bool $waived
     *
     * @return self
     */
    public function setWaived(?bool $waived): self
    {
        $this->waived = $waived;

        return $this;
    }
}
