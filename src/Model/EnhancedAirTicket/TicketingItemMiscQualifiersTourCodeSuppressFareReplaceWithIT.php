<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemMiscQualifiersTourCodeSuppressFareReplaceWithIT extends AbstractModel
{
    /**
     * "Ind" is used to specify to suppress the fare amount on the ticket and replace with IT.
     *
     * @var bool
     */
    protected $ind;

    /**
     * "Ind" is used to specify to suppress the fare amount on the ticket and replace with IT.
     *
     * @return bool
     */
    public function getInd(): ?bool
    {
        return $this->ind;
    }

    /**
     * "Ind" is used to specify to suppress the fare amount on the ticket and replace with IT.
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
