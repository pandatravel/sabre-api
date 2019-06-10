<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceComparisonAcceptablePriceIncrease extends AbstractModel
{
    /**
     * Used to define an amount threshold.
     *
     * @var float
     */
    protected $amount;
    /**
     * Used to specify whether service should stop when actual price would be greater than "AmountSpecified" + percent or amount increase.
     *
     * @var bool
     */
    protected $haltOnNonAcceptablePrice;

    /**
     * Used to define an amount threshold.
     *
     * @return float
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * Used to define an amount threshold.
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
     * Used to specify whether service should stop when actual price would be greater than "AmountSpecified" + percent or amount increase.
     *
     * @return bool
     */
    public function getHaltOnNonAcceptablePrice(): ?bool
    {
        return $this->haltOnNonAcceptablePrice;
    }

    /**
     * Used to specify whether service should stop when actual price would be greater than "AmountSpecified" + percent or amount increase.
     *
     * @param bool $haltOnNonAcceptablePrice
     *
     * @return self
     */
    public function setHaltOnNonAcceptablePrice(?bool $haltOnNonAcceptablePrice): self
    {
        $this->haltOnNonAcceptablePrice = $haltOnNonAcceptablePrice;

        return $this;
    }
}