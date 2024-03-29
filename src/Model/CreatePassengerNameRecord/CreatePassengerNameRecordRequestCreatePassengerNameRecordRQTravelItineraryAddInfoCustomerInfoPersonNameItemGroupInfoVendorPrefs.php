<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoPersonNameItemGroupInfoVendorPrefs extends AbstractModel
{
    /**
     * Specify if the request is based upon a hosted or a non-hosted carrier.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoPersonNameItemGroupInfoVendorPrefsAirline
     */
    protected $airline;

    /**
     * Specify if the request is based upon a hosted or a non-hosted carrier.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoPersonNameItemGroupInfoVendorPrefsAirline|null
     */
    public function getAirline(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoPersonNameItemGroupInfoVendorPrefsAirline
    {
        return $this->airline;
    }

    /**
     * Specify if the request is based upon a hosted or a non-hosted carrier.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoPersonNameItemGroupInfoVendorPrefsAirline|null $airline
     *
     * @return self
     */
    public function setAirline(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoPersonNameItemGroupInfoVendorPrefsAirline $airline): self
    {
        $this->airline = $airline;

        return $this;
    }
}
