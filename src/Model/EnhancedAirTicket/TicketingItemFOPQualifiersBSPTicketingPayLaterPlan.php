<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemFOPQualifiersBSPTicketingPayLaterPlan extends AbstractModel
{
    /**
     * @var TicketingItemFOPQualifiersBSPTicketingPayLaterPlanFare
     */
    protected $fare;
    /**
     * @var TicketingItemFOPQualifiersBSPTicketingPayLaterPlanFOP
     */
    protected $fOP;
    /**
     * @var TicketingItemFOPQualifiersBSPTicketingPayLaterPlanInstallment
     */
    protected $installment;

    /**
     * @return TicketingItemFOPQualifiersBSPTicketingPayLaterPlanFare
     */
    public function getFare(): ?TicketingItemFOPQualifiersBSPTicketingPayLaterPlanFare
    {
        return $this->fare;
    }

    /**
     * @param TicketingItemFOPQualifiersBSPTicketingPayLaterPlanFare $fare
     *
     * @return self
     */
    public function setFare(?TicketingItemFOPQualifiersBSPTicketingPayLaterPlanFare $fare): self
    {
        $this->fare = $fare;

        return $this;
    }

    /**
     * @return TicketingItemFOPQualifiersBSPTicketingPayLaterPlanFOP
     */
    public function getFOP(): ?TicketingItemFOPQualifiersBSPTicketingPayLaterPlanFOP
    {
        return $this->fOP;
    }

    /**
     * @param TicketingItemFOPQualifiersBSPTicketingPayLaterPlanFOP $fOP
     *
     * @return self
     */
    public function setFOP(?TicketingItemFOPQualifiersBSPTicketingPayLaterPlanFOP $fOP): self
    {
        $this->fOP = $fOP;

        return $this;
    }

    /**
     * @return TicketingItemFOPQualifiersBSPTicketingPayLaterPlanInstallment
     */
    public function getInstallment(): ?TicketingItemFOPQualifiersBSPTicketingPayLaterPlanInstallment
    {
        return $this->installment;
    }

    /**
     * @param TicketingItemFOPQualifiersBSPTicketingPayLaterPlanInstallment $installment
     *
     * @return self
     */
    public function setInstallment(?TicketingItemFOPQualifiersBSPTicketingPayLaterPlanInstallment $installment): self
    {
        $this->installment = $installment;

        return $this;
    }
}
