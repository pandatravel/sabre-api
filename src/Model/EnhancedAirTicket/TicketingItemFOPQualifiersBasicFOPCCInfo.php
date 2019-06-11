<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemFOPQualifiersBasicFOPCCInfo extends AbstractModel
{
    /**
     * "Suppress" is used to specify whether or not to suppress credit card information on an itinerary.
     *
     * @var bool
     */
    protected $suppress;
    /**
     * @var TicketingItemFOPQualifiersBasicFOPCCInfoPaymentCard
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
     * @return TicketingItemFOPQualifiersBasicFOPCCInfoPaymentCard
     */
    public function getPaymentCard(): ?TicketingItemFOPQualifiersBasicFOPCCInfoPaymentCard
    {
        return $this->paymentCard;
    }

    /**
     * @param TicketingItemFOPQualifiersBasicFOPCCInfoPaymentCard $paymentCard
     *
     * @return self
     */
    public function setPaymentCard(?TicketingItemFOPQualifiersBasicFOPCCInfoPaymentCard $paymentCard): self
    {
        $this->paymentCard = $paymentCard;

        return $this;
    }
}
