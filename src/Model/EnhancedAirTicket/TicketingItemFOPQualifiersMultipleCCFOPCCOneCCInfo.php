<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemFOPQualifiersMultipleCCFOPCCOneCCInfo extends AbstractModel
{
    /**
     * "Suppress" is used to specify whether or not to suppress credit card information on an itinerary.
     *
     * @var bool
     */
    protected $suppress;
    /**
     * @var TicketingItemFOPQualifiersMultipleCCFOPCCOneCCInfoPaymentCard
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
     * @return TicketingItemFOPQualifiersMultipleCCFOPCCOneCCInfoPaymentCard
     */
    public function getPaymentCard(): ?TicketingItemFOPQualifiersMultipleCCFOPCCOneCCInfoPaymentCard
    {
        return $this->paymentCard;
    }

    /**
     * @param TicketingItemFOPQualifiersMultipleCCFOPCCOneCCInfoPaymentCard $paymentCard
     *
     * @return self
     */
    public function setPaymentCard(?TicketingItemFOPQualifiersMultipleCCFOPCCOneCCInfoPaymentCard $paymentCard): self
    {
        $this->paymentCard = $paymentCard;

        return $this;
    }
}
