<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFlightQualifiers extends AbstractModel
{
    /**
     * The airline vendor preferences.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFlightQualifiersVendorPrefs
     */
    protected $vendorPrefs;

    /**
     * The airline vendor preferences.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFlightQualifiersVendorPrefs|null
     */
    public function getVendorPrefs(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFlightQualifiersVendorPrefs
    {
        return $this->vendorPrefs;
    }

    /**
     * The airline vendor preferences.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFlightQualifiersVendorPrefs|null $vendorPrefs
     *
     * @return self
     */
    public function setVendorPrefs(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFlightQualifiersVendorPrefs $vendorPrefs): self
    {
        $this->vendorPrefs = $vendorPrefs;

        return $this;
    }
}
