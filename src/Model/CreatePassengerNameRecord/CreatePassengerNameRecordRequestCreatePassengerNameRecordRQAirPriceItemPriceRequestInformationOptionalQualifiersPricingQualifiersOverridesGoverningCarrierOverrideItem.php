<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverridesGoverningCarrierOverrideItem extends AbstractModel
{
    /**
     * The airline code.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverridesGoverningCarrierOverrideItemAirline
     */
    protected $airline;
    /**
     * Used to tie a governing carrier override to particular segments.
     * If a client application needs to utilize a governing carrier override from a particular segment or segments the application can use 'GoverningCarrierOverride' in conjunction with 'ItineraryOptions.SegmentSelect'.
     *
     * @var string
     */
    protected $rPH;

    /**
     * The airline code.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverridesGoverningCarrierOverrideItemAirline
     */
    public function getAirline(): CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverridesGoverningCarrierOverrideItemAirline
    {
        return $this->airline;
    }

    /**
     * The airline code.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverridesGoverningCarrierOverrideItemAirline $airline
     *
     * @return self
     */
    public function setAirline(CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverridesGoverningCarrierOverrideItemAirline $airline): self
    {
        $this->airline = $airline;

        return $this;
    }

    /**
     * Used to tie a governing carrier override to particular segments.
     * If a client application needs to utilize a governing carrier override from a particular segment or segments the application can use 'GoverningCarrierOverride' in conjunction with 'ItineraryOptions.SegmentSelect'.
     *
     * @return string
     */
    public function getRPH(): string
    {
        return $this->rPH;
    }

    /**
     * Used to tie a governing carrier override to particular segments.
     * If a client application needs to utilize a governing carrier override from a particular segment or segments the application can use 'GoverningCarrierOverride' in conjunction with 'ItineraryOptions.SegmentSelect'.
     *
     * @param string $rPH
     *
     * @return self
     */
    public function setRPH(string $rPH): self
    {
        $this->rPH = $rPH;

        return $this;
    }
}
