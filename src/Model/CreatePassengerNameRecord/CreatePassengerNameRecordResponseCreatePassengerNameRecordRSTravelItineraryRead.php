<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryRead extends AbstractModel
{
    /**
     * Reservation details.
     *
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItinerary
     */
    protected $travelItinerary;

    /**
     * Reservation details.
     *
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItinerary
     */
    public function getTravelItinerary(): ?CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItinerary
    {
        return $this->travelItinerary;
    }

    /**
     * Reservation details.
     *
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItinerary $travelItinerary
     *
     * @return self
     */
    public function setTravelItinerary(?CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItinerary $travelItinerary): self
    {
        $this->travelItinerary = $travelItinerary;

        return $this;
    }
}
