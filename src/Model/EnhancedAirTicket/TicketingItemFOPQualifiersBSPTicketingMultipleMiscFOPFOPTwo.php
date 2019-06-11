<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemFOPQualifiersBSPTicketingMultipleMiscFOPFOPTwo extends AbstractModel
{
    /**
     * "Type" is used to specify the misc payment.
     *
     * @var string
     */
    protected $type;
    /**
     * @var TicketingItemFOPQualifiersBSPTicketingMultipleMiscFOPFOPTwoExtendedPayment
     */
    protected $extendedPayment;

    /**
     * "Type" is used to specify the misc payment.
     *
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * "Type" is used to specify the misc payment.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return TicketingItemFOPQualifiersBSPTicketingMultipleMiscFOPFOPTwoExtendedPayment
     */
    public function getExtendedPayment(): ?TicketingItemFOPQualifiersBSPTicketingMultipleMiscFOPFOPTwoExtendedPayment
    {
        return $this->extendedPayment;
    }

    /**
     * @param TicketingItemFOPQualifiersBSPTicketingMultipleMiscFOPFOPTwoExtendedPayment $extendedPayment
     *
     * @return self
     */
    public function setExtendedPayment(?TicketingItemFOPQualifiersBSPTicketingMultipleMiscFOPFOPTwoExtendedPayment $extendedPayment): self
    {
        $this->extendedPayment = $extendedPayment;

        return $this;
    }
}
