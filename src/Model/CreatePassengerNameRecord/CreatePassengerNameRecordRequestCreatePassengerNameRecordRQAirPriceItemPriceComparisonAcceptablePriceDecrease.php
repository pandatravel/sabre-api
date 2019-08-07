<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceComparisonAcceptablePriceDecrease extends AbstractModel
{
    /**
     * Used to define an amount threshold.
     *
     * @var float
     */
    protected $amount;
    /**
     * 'HaltOnNonAcceptablePrice' is used to specify whether the service should be stopped when the actual price is lesser than 'AmountSpecified' + percent or amount decrease.
     *
     * @var bool
     */
    protected $haltOnNonAcceptablePrice;

    /**
     * Used to define an amount threshold.
     *
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * Used to define an amount threshold.
     *
     * @param float|null $amount
     *
     * @return self
     */
    public function setAmount(?float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * 'HaltOnNonAcceptablePrice' is used to specify whether the service should be stopped when the actual price is lesser than 'AmountSpecified' + percent or amount decrease.
     *
     * @return bool|null
     */
    public function getHaltOnNonAcceptablePrice(): ?bool
    {
        return $this->haltOnNonAcceptablePrice;
    }

    /**
     * 'HaltOnNonAcceptablePrice' is used to specify whether the service should be stopped when the actual price is lesser than 'AmountSpecified' + percent or amount decrease.
     *
     * @param bool|null $haltOnNonAcceptablePrice
     *
     * @return self
     */
    public function setHaltOnNonAcceptablePrice(?bool $haltOnNonAcceptablePrice): self
    {
        $this->haltOnNonAcceptablePrice = $haltOnNonAcceptablePrice;

        return $this;
    }
}
