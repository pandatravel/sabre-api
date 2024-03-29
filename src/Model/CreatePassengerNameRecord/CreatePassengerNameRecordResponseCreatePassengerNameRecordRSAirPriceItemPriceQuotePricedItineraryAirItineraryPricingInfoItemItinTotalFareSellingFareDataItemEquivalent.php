<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareSellingFareDataItemEquivalent extends AbstractModel
{
    /**
     * The equivalent fare amount.
     *
     * @var string
     */
    protected $amount;

    /**
     * The equivalent fare amount.
     *
     * @return string|null
     */
    public function getAmount(): ?string
    {
        return $this->amount;
    }

    /**
     * The equivalent fare amount.
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
}
