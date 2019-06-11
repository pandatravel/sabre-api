<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOPFOPOneCCInfo extends AbstractModel
{
    /**
     * @var TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOPFOPOneCCInfoPaymentCard
     */
    protected $paymentCard;

    /**
     * @return TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOPFOPOneCCInfoPaymentCard
     */
    public function getPaymentCard(): ?TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOPFOPOneCCInfoPaymentCard
    {
        return $this->paymentCard;
    }

    /**
     * @param TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOPFOPOneCCInfoPaymentCard $paymentCard
     *
     * @return self
     */
    public function setPaymentCard(?TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOPFOPOneCCInfoPaymentCard $paymentCard): self
    {
        $this->paymentCard = $paymentCard;

        return $this;
    }
}
