<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingMultipleFOPFOPOneCCInfo extends AbstractModel
{
    /**
     * Used to define the payment card details.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingMultipleFOPFOPOneCCInfoPaymentCard
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
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingMultipleFOPFOPOneCCInfoPaymentCard|null
     */
    public function getPaymentCard(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingMultipleFOPFOPOneCCInfoPaymentCard
    {
        return $this->paymentCard;
    }

    /**
     * Used to define the payment card details.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingMultipleFOPFOPOneCCInfoPaymentCard|null $paymentCard
     *
     * @return self
     */
    public function setPaymentCard(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingMultipleFOPFOPOneCCInfoPaymentCard $paymentCard): self
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
