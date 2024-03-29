<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareEndorsements extends AbstractModel
{
    /**
     * The endorsement text information.
     *
     * @var string[]
     */
    protected $text;

    /**
     * The endorsement text information.
     *
     * @return string[]|null
     */
    public function getText(): ?array
    {
        return $this->text;
    }

    /**
     * The endorsement text information.
     *
     * @param string[]|null $text
     *
     * @return self
     */
    public function setText(?array $text): self
    {
        $this->text = $text;

        return $this;
    }
}
