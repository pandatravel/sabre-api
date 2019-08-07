<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersCommandPricingItem extends AbstractModel
{
    /**
     * Used to specify the discount information.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersCommandPricingItemDiscount
     */
    protected $discount;
    /**
     * Used to instruct the system to price the itinerary utilizing the fare basis code.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersCommandPricingItemFareBasis
     */
    protected $fareBasis;
    /**
     * Used to match up with 'SegmentSelect'.
     *
     * @var string
     */
    protected $rPH;

    /**
     * Used to specify the discount information.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersCommandPricingItemDiscount|null
     */
    public function getDiscount(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersCommandPricingItemDiscount
    {
        return $this->discount;
    }

    /**
     * Used to specify the discount information.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersCommandPricingItemDiscount|null $discount
     *
     * @return self
     */
    public function setDiscount(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersCommandPricingItemDiscount $discount): self
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Used to instruct the system to price the itinerary utilizing the fare basis code.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersCommandPricingItemFareBasis|null
     */
    public function getFareBasis(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersCommandPricingItemFareBasis
    {
        return $this->fareBasis;
    }

    /**
     * Used to instruct the system to price the itinerary utilizing the fare basis code.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersCommandPricingItemFareBasis|null $fareBasis
     *
     * @return self
     */
    public function setFareBasis(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersCommandPricingItemFareBasis $fareBasis): self
    {
        $this->fareBasis = $fareBasis;

        return $this;
    }

    /**
     * Used to match up with 'SegmentSelect'.
     *
     * @return string|null
     */
    public function getRPH(): ?string
    {
        return $this->rPH;
    }

    /**
     * Used to match up with 'SegmentSelect'.
     *
     * @param string|null $rPH
     *
     * @return self
     */
    public function setRPH(?string $rPH): self
    {
        $this->rPH = $rPH;

        return $this;
    }
}
