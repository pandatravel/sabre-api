<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPOneCCInfo extends AbstractModel
{
    /**
     * @var TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPOneCCInfoPaymentCard
     */
    protected $paymentCard;

    /**
     * @return TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPOneCCInfoPaymentCard
     */
    public function getPaymentCard(): ?TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPOneCCInfoPaymentCard
    {
        return $this->paymentCard;
    }

    /**
     * @param TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPOneCCInfoPaymentCard $paymentCard
     *
     * @return self
     */
    public function setPaymentCard(?TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPOneCCInfoPaymentCard $paymentCard): self
    {
        $this->paymentCard = $paymentCard;

        return $this;
    }
}
