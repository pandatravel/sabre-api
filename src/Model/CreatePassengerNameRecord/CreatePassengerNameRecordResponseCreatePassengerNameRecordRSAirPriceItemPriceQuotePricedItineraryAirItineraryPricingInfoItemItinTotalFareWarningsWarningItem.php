<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareWarningsWarningItem extends AbstractModel
{
    /**
     * The short text information.
     *
     * @var string
     */
    protected $shortText;

    /**
     * The short text information.
     *
     * @return string|null
     */
    public function getShortText(): ?string
    {
        return $this->shortText;
    }

    /**
     * The short text information.
     *
     * @param string|null $shortText
     *
     * @return self
     */
    public function setShortText(?string $shortText): self
    {
        $this->shortText = $shortText;

        return $this;
    }
}
