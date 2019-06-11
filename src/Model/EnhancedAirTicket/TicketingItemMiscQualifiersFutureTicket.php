<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemMiscQualifiersFutureTicket extends AbstractModel
{
    /**
     * @var TicketingItemMiscQualifiersFutureTicketLineItem[]
     */
    protected $line;

    /**
     * @return TicketingItemMiscQualifiersFutureTicketLineItem[]
     */
    public function getLine(): ?array
    {
        return $this->line;
    }

    /**
     * @param TicketingItemMiscQualifiersFutureTicketLineItem[] $line
     *
     * @return self
     */
    public function setLine(?array $line): self
    {
        $this->line = $line;

        return $this;
    }
}
