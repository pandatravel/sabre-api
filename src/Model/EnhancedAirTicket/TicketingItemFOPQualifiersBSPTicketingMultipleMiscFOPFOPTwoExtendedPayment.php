<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemFOPQualifiersBSPTicketingMultipleMiscFOPFOPTwoExtendedPayment extends AbstractModel
{
    /**
     * "NumMonths" is used to specify extended payment if applicable.
     *
     * @var int
     */
    protected $numMonths;

    /**
     * "NumMonths" is used to specify extended payment if applicable.
     *
     * @return int
     */
    public function getNumMonths(): ?int
    {
        return $this->numMonths;
    }

    /**
     * "NumMonths" is used to specify extended payment if applicable.
     *
     * @param int $numMonths
     *
     * @return self
     */
    public function setNumMonths(?int $numMonths): self
    {
        $this->numMonths = $numMonths;

        return $this;
    }
}
