<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemFOPQualifiersBSPTicketingMultipleMiscFOPFare extends AbstractModel
{
    /**
     * "Amount" is used to specify the amount to be applied to the second FOP.
     *
     * @var string
     */
    protected $amount;

    /**
     * "Amount" is used to specify the amount to be applied to the second FOP.
     *
     * @return string
     */
    public function getAmount(): ?string
    {
        return $this->amount;
    }

    /**
     * "Amount" is used to specify the amount to be applied to the second FOP.
     *
     * @param string $amount
     *
     * @return self
     */
    public function setAmount(?string $amount): self
    {
        $this->amount = $amount;

        return $this;
    }
}
