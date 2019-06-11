<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemMiscQualifiersTourCodeSuppressIT extends AbstractModel
{
    /**
     * "Ind" is used to specify to to suppress the IT in the tour code box from printing.
     *
     * @var bool
     */
    protected $ind;

    /**
     * "Ind" is used to specify to to suppress the IT in the tour code box from printing.
     *
     * @return bool
     */
    public function getInd(): ?bool
    {
        return $this->ind;
    }

    /**
     * "Ind" is used to specify to to suppress the IT in the tour code box from printing.
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
