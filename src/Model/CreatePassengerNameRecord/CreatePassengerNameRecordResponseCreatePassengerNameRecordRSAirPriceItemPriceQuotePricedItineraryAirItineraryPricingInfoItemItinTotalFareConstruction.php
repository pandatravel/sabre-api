<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareConstruction extends AbstractModel
{
    /**
     * The construction amount information.
     *
     * @var string
     */
    protected $amount;
    /**
     * The applicable currency code.
     *
     * @var string
     */
    protected $currencyCode;
    /**
     * The rate of exchange.
     *
     * @var string
     */
    protected $rateOfExchange;

    /**
     * The construction amount information.
     *
     * @return string|null
     */
    public function getAmount(): ?string
    {
        return $this->amount;
    }

    /**
     * The construction amount information.
     *
     * @param string|null $amount
     *
     * @return self
     */
    public function setAmount(?string $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * The applicable currency code.
     *
     * @return string|null
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    /**
     * The applicable currency code.
     *
     * @param string|null $currencyCode
     *
     * @return self
     */
    public function setCurrencyCode(?string $currencyCode): self
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * The rate of exchange.
     *
     * @return string|null
     */
    public function getRateOfExchange(): ?string
    {
        return $this->rateOfExchange;
    }

    /**
     * The rate of exchange.
     *
     * @param string|null $rateOfExchange
     *
     * @return self
     */
    public function setRateOfExchange(?string $rateOfExchange): self
    {
        $this->rateOfExchange = $rateOfExchange;

        return $this;
    }
}
