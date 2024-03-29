<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersBargainFinder extends AbstractModel
{
    /**
     * Used to instruct the system to return the lowest fare ever offered for the particular itinerary regardless of whether or not it is currently available.
     *
     * @var bool
     */
    protected $historical;
    /**
     * Used to instruct the system to rebook the flights in the applicable classes of service to get the lower fare.
     *
     * @var bool
     */
    protected $rebook;

    /**
     * Used to instruct the system to return the lowest fare ever offered for the particular itinerary regardless of whether or not it is currently available.
     *
     * @return bool|null
     */
    public function getHistorical(): ?bool
    {
        return $this->historical;
    }

    /**
     * Used to instruct the system to return the lowest fare ever offered for the particular itinerary regardless of whether or not it is currently available.
     *
     * @param bool|null $historical
     *
     * @return self
     */
    public function setHistorical(?bool $historical): self
    {
        $this->historical = $historical;

        return $this;
    }

    /**
     * Used to instruct the system to rebook the flights in the applicable classes of service to get the lower fare.
     *
     * @return bool|null
     */
    public function getRebook(): ?bool
    {
        return $this->rebook;
    }

    /**
     * Used to instruct the system to rebook the flights in the applicable classes of service to get the lower fare.
     *
     * @param bool|null $rebook
     *
     * @return self
     */
    public function setRebook(?bool $rebook): self
    {
        $this->rebook = $rebook;

        return $this;
    }
}
