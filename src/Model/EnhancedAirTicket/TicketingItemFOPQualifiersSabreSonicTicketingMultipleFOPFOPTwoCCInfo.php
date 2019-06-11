<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOPFOPTwoCCInfo extends AbstractModel
{
    /**
     * @var TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOPFOPTwoCCInfoPaymentCard
     */
    protected $paymentCard;

    /**
     * @return TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOPFOPTwoCCInfoPaymentCard
     */
    public function getPaymentCard(): ?TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOPFOPTwoCCInfoPaymentCard
    {
        return $this->paymentCard;
    }

    /**
     * @param TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOPFOPTwoCCInfoPaymentCard $paymentCard
     *
     * @return self
     */
    public function setPaymentCard(?TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOPFOPTwoCCInfoPaymentCard $paymentCard): self
    {
        $this->paymentCard = $paymentCard;

        return $this;
    }
}
