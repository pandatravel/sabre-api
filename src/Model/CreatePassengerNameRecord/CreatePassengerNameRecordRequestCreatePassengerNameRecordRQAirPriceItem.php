<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItem extends AbstractModel
{
    /**
     * Used to specify a specific total price threshold which is acceptable.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceComparison
     */
    protected $priceComparison;
    /**
     * Used to define the pricing qualifiers.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformation
     */
    protected $priceRequestInformation;

    /**
     * Used to specify a specific total price threshold which is acceptable.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceComparison|null
     */
    public function getPriceComparison(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceComparison
    {
        return $this->priceComparison;
    }

    /**
     * Used to specify a specific total price threshold which is acceptable.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceComparison|null $priceComparison
     *
     * @return self
     */
    public function setPriceComparison(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceComparison $priceComparison): self
    {
        $this->priceComparison = $priceComparison;

        return $this;
    }

    /**
     * Used to define the pricing qualifiers.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformation|null
     */
    public function getPriceRequestInformation(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformation
    {
        return $this->priceRequestInformation;
    }

    /**
     * Used to define the pricing qualifiers.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformation|null $priceRequestInformation
     *
     * @return self
     */
    public function setPriceRequestInformation(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformation $priceRequestInformation): self
    {
        $this->priceRequestInformation = $priceRequestInformation;

        return $this;
    }
}
