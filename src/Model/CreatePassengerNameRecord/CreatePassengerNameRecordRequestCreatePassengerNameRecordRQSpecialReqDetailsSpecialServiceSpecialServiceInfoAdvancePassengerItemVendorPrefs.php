<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQSpecialReqDetailsSpecialServiceSpecialServiceInfoAdvancePassengerItemVendorPrefs extends AbstractModel
{
    /**
     * Airline.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQSpecialReqDetailsSpecialServiceSpecialServiceInfoAdvancePassengerItemVendorPrefsAirline
     */
    protected $airline;

    /**
     * Airline.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQSpecialReqDetailsSpecialServiceSpecialServiceInfoAdvancePassengerItemVendorPrefsAirline
     */
    public function getAirline(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQSpecialReqDetailsSpecialServiceSpecialServiceInfoAdvancePassengerItemVendorPrefsAirline
    {
        return $this->airline;
    }

    /**
     * Airline.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQSpecialReqDetailsSpecialServiceSpecialServiceInfoAdvancePassengerItemVendorPrefsAirline $airline
     *
     * @return self
     */
    public function setAirline(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQSpecialReqDetailsSpecialServiceSpecialServiceInfoAdvancePassengerItemVendorPrefsAirline $airline): self
    {
        $this->airline = $airline;

        return $this;
    }
}