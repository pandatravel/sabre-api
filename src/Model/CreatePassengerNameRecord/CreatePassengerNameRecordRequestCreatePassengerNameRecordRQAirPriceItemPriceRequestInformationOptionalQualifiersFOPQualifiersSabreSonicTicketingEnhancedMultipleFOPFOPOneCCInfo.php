<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPOneCCInfo extends AbstractModel
{
    /**
     * Used to define the payment card details.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPOneCCInfoPaymentCard
     */
    protected $paymentCard;

    /**
     * Used to define the payment card details.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPOneCCInfoPaymentCard|null
     */
    public function getPaymentCard(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPOneCCInfoPaymentCard
    {
        return $this->paymentCard;
    }

    /**
     * Used to define the payment card details.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPOneCCInfoPaymentCard|null $paymentCard
     *
     * @return self
     */
    public function setPaymentCard(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPOneCCInfoPaymentCard $paymentCard): self
    {
        $this->paymentCard = $paymentCard;

        return $this;
    }
}
