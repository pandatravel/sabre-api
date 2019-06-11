<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class EnhancedAirTicketRequest extends AbstractModel
{
    /**
     * @var AirTicketRQ
     */
    protected $airTicketRQ;

    /**
     * @return AirTicketRQ
     */
    public function getAirTicketRQ(): ?AirTicketRQ
    {
        return $this->airTicketRQ;
    }

    /**
     * @param AirTicketRQ $airTicketRQ
     *
     * @return self
     */
    public function setAirTicketRQ(?AirTicketRQ $airTicketRQ): self
    {
        $this->airTicketRQ = $airTicketRQ;

        return $this;
    }
}
