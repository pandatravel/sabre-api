<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class EnhancedAirTicketResponse extends AbstractModel
{
    /**
     * @var AirTicketRS
     */
    protected $airTicketRS;
    /**
     * @var LinksItem[]
     */
    protected $links;

    /**
     * @return AirTicketRS
     */
    public function getAirTicketRS(): ?AirTicketRS
    {
        return $this->airTicketRS;
    }

    /**
     * @param AirTicketRS $airTicketRS
     *
     * @return self
     */
    public function setAirTicketRS(?AirTicketRS $airTicketRS): self
    {
        $this->airTicketRS = $airTicketRS;

        return $this;
    }

    /**
     * @return LinksItem[]
     */
    public function getLinks(): ?array
    {
        return $this->links;
    }

    /**
     * @param LinksItem[] $links
     *
     * @return self
     */
    public function setLinks(?array $links): self
    {
        $this->links = $links;

        return $this;
    }
}
