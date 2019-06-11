<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemFOPQualifiersBSPTicketingPayLaterPlanFare extends AbstractModel
{
    /**
     * "Amount" is used to specify the remaining fare amount.
     *
     * @var string
     */
    protected $amount;

    /**
     * "Amount" is used to specify the remaining fare amount.
     *
     * @return string
     */
    public function getAmount(): ?string
    {
        return $this->amount;
    }

    /**
     * "Amount" is used to specify the remaining fare amount.
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
