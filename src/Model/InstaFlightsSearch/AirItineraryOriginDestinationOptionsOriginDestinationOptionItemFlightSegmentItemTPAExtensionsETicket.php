<?php

namespace Ammonkc\SabreApi\Model\InstaFlightsSearch;

use Ammonkc\SabreApi\AbstractModel;

class AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemTPAExtensionsETicket extends AbstractModel
{
    /**
     * A flag that indicates if this is an electronic ticket.
     *
     * @var string
     */
    protected $ind;

    /**
     * A flag that indicates if this is an electronic ticket.
     *
     * @return string
     */
    public function getInd(): ?string
    {
        return $this->ind;
    }

    /**
     * A flag that indicates if this is an electronic ticket.
     *
     * @param string $ind
     *
     * @return self
     */
    public function setInd(?string $ind): self
    {
        $this->ind = $ind;

        return $this;
    }
}
