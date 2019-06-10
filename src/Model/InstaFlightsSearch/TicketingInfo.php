<?php

namespace Ammonkc\SabreApi\Model\InstaFlightsSearch;

use Ammonkc\SabreApi\AbstractModel;

class TicketingInfo extends AbstractModel
{
    /**
     * The type of ticketing for the itinerary.
     *
     * @var string
     */
    protected $ticketType;
    /**
     * Indicates validation of interline ticketing aggrement.
     *
     * @var string
     */
    protected $validInterline;

    /**
     * The type of ticketing for the itinerary.
     *
     * @return string
     */
    public function getTicketType(): ?string
    {
        return $this->ticketType;
    }

    /**
     * The type of ticketing for the itinerary.
     *
     * @param string $ticketType
     *
     * @return self
     */
    public function setTicketType(?string $ticketType): self
    {
        $this->ticketType = $ticketType;

        return $this;
    }

    /**
     * Indicates validation of interline ticketing aggrement.
     *
     * @return string
     */
    public function getValidInterline(): ?string
    {
        return $this->validInterline;
    }

    /**
     * Indicates validation of interline ticketing aggrement.
     *
     * @param string $validInterline
     *
     * @return self
     */
    public function setValidInterline(?string $validInterline): self
    {
        $this->validInterline = $validInterline;

        return $this;
    }
}
