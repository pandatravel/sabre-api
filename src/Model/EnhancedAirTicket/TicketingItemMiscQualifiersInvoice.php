<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemMiscQualifiersInvoice extends AbstractModel
{
    /**
     * "Invoice" is used to specify to print invoice at time of ticketing.
     *
     * @var bool
     */
    protected $ind;
    /**
     * "ETReceipt" is used to print a passenger electronic ticketing receipt at time of ticketing.
     *
     * @var bool
     */
    protected $eTReceipt;

    /**
     * "Invoice" is used to specify to print invoice at time of ticketing.
     *
     * @return bool
     */
    public function getInd(): ?bool
    {
        return $this->ind;
    }

    /**
     * "Invoice" is used to specify to print invoice at time of ticketing.
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

    /**
     * "ETReceipt" is used to print a passenger electronic ticketing receipt at time of ticketing.
     *
     * @return bool
     */
    public function getETReceipt(): ?bool
    {
        return $this->eTReceipt;
    }

    /**
     * "ETReceipt" is used to print a passenger electronic ticketing receipt at time of ticketing.
     *
     * @param bool $eTReceipt
     *
     * @return self
     */
    public function setETReceipt(?bool $eTReceipt): self
    {
        $this->eTReceipt = $eTReceipt;

        return $this;
    }
}
