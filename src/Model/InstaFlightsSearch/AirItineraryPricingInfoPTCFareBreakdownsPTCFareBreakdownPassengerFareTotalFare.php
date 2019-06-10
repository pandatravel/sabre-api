<?php

namespace Ammonkc\SabreApi\Model\InstaFlightsSearch;

use Ammonkc\SabreApi\AbstractModel;

class AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerFareTotalFare extends AbstractModel
{
    /**
     * 3-character currency code.
     *
     * @var string
     */
    protected $currencyCode;
    /**
     * The combined total for all passengers (all fares plus tax).

    If `sortby` or `sortby2` are specified with a value of `totalfare`, then the itineraries in the response are sorted by `ItinTotalFare.TotalFare.Amount`.

     *
     * @var float
     */
    protected $amount;

    /**
     * 3-character currency code.
     *
     * @return string
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    /**
     * 3-character currency code.
     *
     * @param string $currencyCode
     *
     * @return self
     */
    public function setCurrencyCode(?string $currencyCode): self
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * The combined total for all passengers (all fares plus tax).

    If `sortby` or `sortby2` are specified with a value of `totalfare`, then the itineraries in the response are sorted by `ItinTotalFare.TotalFare.Amount`.

     *
     * @return float
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * The combined total for all passengers (all fares plus tax).

    If `sortby` or `sortby2` are specified with a value of `totalfare`, then the itineraries in the response are sorted by `ItinTotalFare.TotalFare.Amount`.

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
}
