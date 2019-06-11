<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemMiscQualifiersTourCodeSuppressITSupressFare extends AbstractModel
{
    /**
     * "Ind" is used to specify to specify to suppress IT from printing in the tour box on the ticket and to suppress fare amounts from printing on the ticket.
     *
     * @var bool
     */
    protected $ind;

    /**
     * "Ind" is used to specify to specify to suppress IT from printing in the tour box on the ticket and to suppress fare amounts from printing on the ticket.
     *
     * @return bool
     */
    public function getInd(): ?bool
    {
        return $this->ind;
    }

    /**
     * "Ind" is used to specify to specify to suppress IT from printing in the tour box on the ticket and to suppress fare amounts from printing on the ticket.
     *
     * @param bool $ind
     *
     * @return self
     */
    public function setInd(?bool $ind): self
    {
        $this->ind = $ind;

        return $this;
    }
}
