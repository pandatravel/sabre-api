<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemFOPQualifiersBSPTicketing extends AbstractModel
{
    /**
     * MultipleFOP cannot combine with .../MultipleMiscFOP, or .../PayLaterPlan.
     *
     * @var TicketingItemFOPQualifiersBSPTicketingMultipleFOP
     */
    protected $multipleFOP;
    /**
     * MultipleMiscFOP cannot combine with .../MultipleFOP, or .../PayLaterPlan.
     *
     * @var TicketingItemFOPQualifiersBSPTicketingMultipleMiscFOP
     */
    protected $multipleMiscFOP;
    /**
     * PayLaterPlan is only applicable to Brazil.
    PayLaterPlan cannot combine with MultipleFOP, or MultipleMiscFOP.
     *
     * @var TicketingItemFOPQualifiersBSPTicketingPayLaterPlan
     */
    protected $payLaterPlan;

    /**
     * MultipleFOP cannot combine with .../MultipleMiscFOP, or .../PayLaterPlan.
     *
     * @return TicketingItemFOPQualifiersBSPTicketingMultipleFOP
     */
    public function getMultipleFOP(): ?TicketingItemFOPQualifiersBSPTicketingMultipleFOP
    {
        return $this->multipleFOP;
    }

    /**
     * MultipleFOP cannot combine with .../MultipleMiscFOP, or .../PayLaterPlan.
     *
     * @param TicketingItemFOPQualifiersBSPTicketingMultipleFOP $multipleFOP
     *
     * @return self
     */
    public function setMultipleFOP(?TicketingItemFOPQualifiersBSPTicketingMultipleFOP $multipleFOP): self
    {
        $this->multipleFOP = $multipleFOP;

        return $this;
    }

    /**
     * MultipleMiscFOP cannot combine with .../MultipleFOP, or .../PayLaterPlan.
     *
     * @return TicketingItemFOPQualifiersBSPTicketingMultipleMiscFOP
     */
    public function getMultipleMiscFOP(): ?TicketingItemFOPQualifiersBSPTicketingMultipleMiscFOP
    {
        return $this->multipleMiscFOP;
    }

    /**
     * MultipleMiscFOP cannot combine with .../MultipleFOP, or .../PayLaterPlan.
     *
     * @param TicketingItemFOPQualifiersBSPTicketingMultipleMiscFOP $multipleMiscFOP
     *
     * @return self
     */
    public function setMultipleMiscFOP(?TicketingItemFOPQualifiersBSPTicketingMultipleMiscFOP $multipleMiscFOP): self
    {
        $this->multipleMiscFOP = $multipleMiscFOP;

        return $this;
    }

    /**
     * PayLaterPlan is only applicable to Brazil.
    PayLaterPlan cannot combine with MultipleFOP, or MultipleMiscFOP.
     *
     * @return TicketingItemFOPQualifiersBSPTicketingPayLaterPlan
     */
    public function getPayLaterPlan(): ?TicketingItemFOPQualifiersBSPTicketingPayLaterPlan
    {
        return $this->payLaterPlan;
    }

    /**
     * PayLaterPlan is only applicable to Brazil.
    PayLaterPlan cannot combine with MultipleFOP, or MultipleMiscFOP.
     *
     * @param TicketingItemFOPQualifiersBSPTicketingPayLaterPlan $payLaterPlan
     *
     * @return self
     */
    public function setPayLaterPlan(?TicketingItemFOPQualifiersBSPTicketingPayLaterPlan $payLaterPlan): self
    {
        $this->payLaterPlan = $payLaterPlan;

        return $this;
    }
}
