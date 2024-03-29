<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFarePrivateFare extends AbstractModel
{
    /**
     * The private fare indicator.
     *
     * @var string
     */
    protected $ind;

    /**
     * The private fare indicator.
     *
     * @return string|null
     */
    public function getInd(): ?string
    {
        return $this->ind;
    }

    /**
     * The private fare indicator.
     *
     * @param string|null $ind
     *
     * @return self
     */
    public function setInd(?string $ind): self
    {
        $this->ind = $ind;

        return $this;
    }
}
