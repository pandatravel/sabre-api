<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverridesNoAdvancePurchase extends AbstractModel
{
    /**
     * Used to instruct the system to price the itinerary with fares having no advance purchase requirements.
     *
     * @var bool
     */
    protected $ind;

    /**
     * Used to instruct the system to price the itinerary with fares having no advance purchase requirements.
     *
     * @return bool|null
     */
    public function getInd(): ?bool
    {
        return $this->ind;
    }

    /**
     * Used to instruct the system to price the itinerary with fares having no advance purchase requirements.
     *
     * @param bool|null $ind
     *
     * @return self
     */
    public function setInd(?bool $ind): self
    {
        $this->ind = $ind;

        return $this;
    }
}
