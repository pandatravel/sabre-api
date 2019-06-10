<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingPayLaterPlanFOPCCInfo extends AbstractModel
{
    /**
     * Used to define card details.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingPayLaterPlanFOPCCInfoPaymentCard
     */
    protected $paymentCard;

    /**
     * Used to define card details.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingPayLaterPlanFOPCCInfoPaymentCard
     */
    public function getPaymentCard(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingPayLaterPlanFOPCCInfoPaymentCard
    {
        return $this->paymentCard;
    }

    /**
     * Used to define card details.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingPayLaterPlanFOPCCInfoPaymentCard $paymentCard
     *
     * @return self
     */
    public function setPaymentCard(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingPayLaterPlanFOPCCInfoPaymentCard $paymentCard): self
    {
        $this->paymentCard = $paymentCard;

        return $this;
    }
}
