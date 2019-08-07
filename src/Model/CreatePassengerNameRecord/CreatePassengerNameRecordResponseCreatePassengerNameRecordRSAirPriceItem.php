<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItem extends AbstractModel
{
    /**
     * Used to return results of price comparison.
     *
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceComparison
     */
    protected $priceComparison;
    /**
     * The price quote details.
     *
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuote
     */
    protected $priceQuote;

    /**
     * Used to return results of price comparison.
     *
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceComparison|null
     */
    public function getPriceComparison(): ?CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceComparison
    {
        return $this->priceComparison;
    }

    /**
     * Used to return results of price comparison.
     *
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceComparison|null $priceComparison
     *
     * @return self
     */
    public function setPriceComparison(?CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceComparison $priceComparison): self
    {
        $this->priceComparison = $priceComparison;

        return $this;
    }

    /**
     * The price quote details.
     *
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuote|null
     */
    public function getPriceQuote(): ?CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuote
    {
        return $this->priceQuote;
    }

    /**
     * The price quote details.
     *
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuote|null $priceQuote
     *
     * @return self
     */
    public function setPriceQuote(?CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuote $priceQuote): self
    {
        $this->priceQuote = $priceQuote;

        return $this;
    }
}
