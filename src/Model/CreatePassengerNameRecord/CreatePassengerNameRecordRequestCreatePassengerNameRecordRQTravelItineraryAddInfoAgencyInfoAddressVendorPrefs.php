<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoAgencyInfoAddressVendorPrefs extends AbstractModel
{
    /**
     * Specify if the request is based upon a hosted or a non-hosted carrier.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoAgencyInfoAddressVendorPrefsAirline
     */
    protected $airline;

    /**
     * Specify if the request is based upon a hosted or a non-hosted carrier.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoAgencyInfoAddressVendorPrefsAirline
     */
    public function getAirline(): CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoAgencyInfoAddressVendorPrefsAirline
    {
        return $this->airline;
    }

    /**
     * Specify if the request is based upon a hosted or a non-hosted carrier.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoAgencyInfoAddressVendorPrefsAirline $airline
     *
     * @return self
     */
    public function setAirline(CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoAgencyInfoAddressVendorPrefsAirline $airline): self
    {
        $this->airline = $airline;

        return $this;
    }
}
