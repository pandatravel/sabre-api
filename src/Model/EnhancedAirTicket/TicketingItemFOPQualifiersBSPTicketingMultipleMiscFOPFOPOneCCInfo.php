<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemFOPQualifiersBSPTicketingMultipleMiscFOPFOPOneCCInfo extends AbstractModel
{
    /**
     * "Suppress" is used to specify whether or not to suppress credit card information on an itinerary.
     *
     * @var bool
     */
    protected $suppress;
    /**
     * @var TicketingItemFOPQualifiersBSPTicketingMultipleMiscFOPFOPOneCCInfoPaymentCard
     */
    protected $paymentCard;

    /**
     * "Suppress" is used to specify whether or not to suppress credit card information on an itinerary.
     *
     * @return bool
     */
    public function getSuppress(): ?bool
    {
        return $this->suppress;
    }

    /**
     * "Suppress" is used to specify whether or not to suppress credit card information on an itinerary.
     *
     * @param bool $suppress
     *
     * @return self
     */
    public function setSuppress(?bool $suppress): self
    {
        $this->suppress = $suppress;

        return $this;
    }

    /**
     * @return TicketingItemFOPQualifiersBSPTicketingMultipleMiscFOPFOPOneCCInfoPaymentCard
     */
    public function getPaymentCard(): ?TicketingItemFOPQualifiersBSPTicketingMultipleMiscFOPFOPOneCCInfoPaymentCard
    {
        return $this->paymentCard;
    }

    /**
     * @param TicketingItemFOPQualifiersBSPTicketingMultipleMiscFOPFOPOneCCInfoPaymentCard $paymentCard
     *
     * @return self
     */
    public function setPaymentCard(?TicketingItemFOPQualifiersBSPTicketingMultipleMiscFOPFOPOneCCInfoPaymentCard $paymentCard): self
    {
        $this->paymentCard = $paymentCard;

        return $this;
    }
}
