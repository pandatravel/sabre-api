<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingMultipleMiscFOPFOPOneCCInfo extends AbstractModel
{
    /**
     * Used to define the payment card details.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingMultipleMiscFOPFOPOneCCInfoPaymentCard
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
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingMultipleMiscFOPFOPOneCCInfoPaymentCard|null
     */
    public function getPaymentCard(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingMultipleMiscFOPFOPOneCCInfoPaymentCard
    {
        return $this->paymentCard;
    }

    /**
     * Used to define the payment card details.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingMultipleMiscFOPFOPOneCCInfoPaymentCard|null $paymentCard
     *
     * @return self
     */
    public function setPaymentCard(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingMultipleMiscFOPFOPOneCCInfoPaymentCard $paymentCard): self
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
