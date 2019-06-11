<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemFOPQualifiersBSPTicketingMultipleFOPFOPTwoCCInfo extends AbstractModel
{
    /**
     * "Suppress" is used to specify whether or not to suppress credit card information on an itinerary.
     *
     * @var bool
     */
    protected $suppress;
    /**
     * @var TicketingItemFOPQualifiersBSPTicketingMultipleFOPFOPTwoCCInfoPaymentCard
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
     * @return TicketingItemFOPQualifiersBSPTicketingMultipleFOPFOPTwoCCInfoPaymentCard
     */
    public function getPaymentCard(): ?TicketingItemFOPQualifiersBSPTicketingMultipleFOPFOPTwoCCInfoPaymentCard
    {
        return $this->paymentCard;
    }

    /**
     * @param TicketingItemFOPQualifiersBSPTicketingMultipleFOPFOPTwoCCInfoPaymentCard $paymentCard
     *
     * @return self
     */
    public function setPaymentCard(?TicketingItemFOPQualifiersBSPTicketingMultipleFOPFOPTwoCCInfoPaymentCard $paymentCard): self
    {
        $this->paymentCard = $paymentCard;

        return $this;
    }
}
