<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersMultipleCCFOPCCTwoCCInfo extends AbstractModel
{
    /**
     * Used to define the payment card details.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersMultipleCCFOPCCTwoCCInfoPaymentCard
     */
    protected $paymentCard;
    /**
     * Used to specify whether or not to suppress credit card information on an itinerary.
     *
     * @var bool
     */
    protected $suppress;

    /**
     * Used to define the payment card details.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersMultipleCCFOPCCTwoCCInfoPaymentCard|null
     */
    public function getPaymentCard(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersMultipleCCFOPCCTwoCCInfoPaymentCard
    {
        return $this->paymentCard;
    }

    /**
     * Used to define the payment card details.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersMultipleCCFOPCCTwoCCInfoPaymentCard|null $paymentCard
     *
     * @return self
     */
    public function setPaymentCard(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersMultipleCCFOPCCTwoCCInfoPaymentCard $paymentCard): self
    {
        $this->paymentCard = $paymentCard;

        return $this;
    }

    /**
     * Used to specify whether or not to suppress credit card information on an itinerary.
     *
     * @return bool|null
     */
    public function getSuppress(): ?bool
    {
        return $this->suppress;
    }

    /**
     * Used to specify whether or not to suppress credit card information on an itinerary.
     *
     * @param bool|null $suppress
     *
     * @return self
     */
    public function setSuppress(?bool $suppress): self
    {
        $this->suppress = $suppress;

        return $this;
    }
}
