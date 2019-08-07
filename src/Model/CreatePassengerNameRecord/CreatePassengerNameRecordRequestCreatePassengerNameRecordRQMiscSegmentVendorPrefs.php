<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQMiscSegmentVendorPrefs extends AbstractModel
{
    /**
     * The airline code.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQMiscSegmentVendorPrefsAirline
     */
    protected $airline;

    /**
     * The airline code.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQMiscSegmentVendorPrefsAirline|null
     */
    public function getAirline(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQMiscSegmentVendorPrefsAirline
    {
        return $this->airline;
    }

    /**
     * The airline code.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQMiscSegmentVendorPrefsAirline|null $airline
     *
     * @return self
     */
    public function setAirline(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQMiscSegmentVendorPrefsAirline $airline): self
    {
        $this->airline = $airline;

        return $this;
    }
}
