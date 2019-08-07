<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfosItineraryInfoItemReservationItemsItemFlightSegmentItemFareBreakInfoEquivFare extends AbstractModel
{
    /**
     * The equivalent fare amount.
     *
     * @var float
     */
    protected $amount;
    /**
     * 'CurrencyCode' is optional and is used to describe the equivalent fare currency code.
     * 'CurrencyCode' is currently not used in tax calculations.
     *
     * @var string
     */
    protected $currencyCode;

    /**
     * The equivalent fare amount.
     *
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * The equivalent fare amount.
     *
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
     * 'CurrencyCode' is optional and is used to describe the equivalent fare currency code.
     * 'CurrencyCode' is currently not used in tax calculations.
     *
     * @return string
     */
    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }

    /**
     * 'CurrencyCode' is optional and is used to describe the equivalent fare currency code.
     * 'CurrencyCode' is currently not used in tax calculations.
     *
     * @param string $currencyCode
     *
     * @return self
     */
    public function setCurrencyCode(string $currencyCode): self
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }
}
