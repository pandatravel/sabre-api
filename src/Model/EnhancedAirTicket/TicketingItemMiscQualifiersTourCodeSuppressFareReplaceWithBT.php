<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemMiscQualifiersTourCodeSuppressFareReplaceWithBT extends AbstractModel
{
    /**
     * "Ind" is used to specify to suppress the fare amount on the ticket and replace with BT.

    This is not applicable to ARC subscribers.

     *
     * @var bool
     */
    protected $ind;

    /**
     * "Ind" is used to specify to suppress the fare amount on the ticket and replace with BT.

    This is not applicable to ARC subscribers.

     *
     * @return bool
     */
    public function getInd(): ?bool
    {
        return $this->ind;
    }

    /**
     * "Ind" is used to specify to suppress the fare amount on the ticket and replace with BT.

    This is not applicable to ARC subscribers.

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
