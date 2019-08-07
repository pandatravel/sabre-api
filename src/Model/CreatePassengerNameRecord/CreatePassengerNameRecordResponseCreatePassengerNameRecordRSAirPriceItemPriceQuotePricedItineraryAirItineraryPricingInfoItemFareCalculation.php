<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemFareCalculation extends AbstractModel
{
    /**
     * The details of the fare calculation line.
     *
     * @var string
     */
    protected $text;

    /**
     * The details of the fare calculation line.
     *
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * The details of the fare calculation line.
     *
     * @param string $text
     *
     * @return self
     */
    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }
}
