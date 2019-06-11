<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemFOPQualifiersBSPTicketingPayLaterPlanFOPCCInfo extends AbstractModel
{
    /**
     * @var TicketingItemFOPQualifiersBSPTicketingPayLaterPlanFOPCCInfoPaymentCard
     */
    protected $paymentCard;

    /**
     * @return TicketingItemFOPQualifiersBSPTicketingPayLaterPlanFOPCCInfoPaymentCard
     */
    public function getPaymentCard(): ?TicketingItemFOPQualifiersBSPTicketingPayLaterPlanFOPCCInfoPaymentCard
    {
        return $this->paymentCard;
    }

    /**
     * @param TicketingItemFOPQualifiersBSPTicketingPayLaterPlanFOPCCInfoPaymentCard $paymentCard
     *
     * @return self
     */
    public function setPaymentCard(?TicketingItemFOPQualifiersBSPTicketingPayLaterPlanFOPCCInfoPaymentCard $paymentCard): self
    {
        $this->paymentCard = $paymentCard;

        return $this;
    }
}
