<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPTwoCCInfo extends AbstractModel
{
    /**
     * @var TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPTwoCCInfoPaymentCard
     */
    protected $paymentCard;

    /**
     * @return TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPTwoCCInfoPaymentCard
     */
    public function getPaymentCard(): ?TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPTwoCCInfoPaymentCard
    {
        return $this->paymentCard;
    }

    /**
     * @param TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPTwoCCInfoPaymentCard $paymentCard
     *
     * @return self
     */
    public function setPaymentCard(?TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPTwoCCInfoPaymentCard $paymentCard): self
    {
        $this->paymentCard = $paymentCard;

        return $this;
    }
}
