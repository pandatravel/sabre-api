<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoAgencyInfo extends AbstractModel
{
    /**
     * Used to pass the agency address.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoAgencyInfoAddress
     */
    protected $address;
    /**
     * Used to pass ticketing related information.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoAgencyInfoTicketing
     */
    protected $ticketing;

    /**
     * Used to pass the agency address.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoAgencyInfoAddress
     */
    public function getAddress(): CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoAgencyInfoAddress
    {
        return $this->address;
    }

    /**
     * Used to pass the agency address.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoAgencyInfoAddress $address
     *
     * @return self
     */
    public function setAddress(CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoAgencyInfoAddress $address): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Used to pass ticketing related information.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoAgencyInfoTicketing
     */
    public function getTicketing(): CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoAgencyInfoTicketing
    {
        return $this->ticketing;
    }

    /**
     * Used to pass ticketing related information.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoAgencyInfoTicketing $ticketing
     *
     * @return self
     */
    public function setTicketing(CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoAgencyInfoTicketing $ticketing): self
    {
        $this->ticketing = $ticketing;

        return $this;
    }
}
