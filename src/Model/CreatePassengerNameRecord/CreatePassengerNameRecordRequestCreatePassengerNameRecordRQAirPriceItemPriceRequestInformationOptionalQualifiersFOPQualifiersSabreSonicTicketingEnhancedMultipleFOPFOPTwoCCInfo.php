<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPTwoCCInfo extends AbstractModel
{
    /**
     * Used to define card details.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPTwoCCInfoPaymentCard
     */
    protected $paymentCard;

    /**
     * Used to define card details.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPTwoCCInfoPaymentCard
     */
    public function getPaymentCard(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPTwoCCInfoPaymentCard
    {
        return $this->paymentCard;
    }

    /**
     * Used to define card details.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPTwoCCInfoPaymentCard $paymentCard
     *
     * @return self
     */
    public function setPaymentCard(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPTwoCCInfoPaymentCard $paymentCard): self
    {
        $this->paymentCard = $paymentCard;

        return $this;
    }
}