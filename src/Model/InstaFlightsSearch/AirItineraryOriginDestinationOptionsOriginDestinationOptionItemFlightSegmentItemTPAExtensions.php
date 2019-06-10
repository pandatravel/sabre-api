<?php

namespace Ammonkc\SabreApi\Model\InstaFlightsSearch;

use Ammonkc\SabreApi\AbstractModel;

class AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemTPAExtensions extends AbstractModel
{
    /**
     * @var AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemTPAExtensionsETicket
     */
    protected $eTicket;

    /**
     * @return AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemTPAExtensionsETicket
     */
    public function getETicket(): ?AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemTPAExtensionsETicket
    {
        return $this->eTicket;
    }

    /**
     * @param AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemTPAExtensionsETicket $eTicket
     *
     * @return self
     */
    public function setETicket(?AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemTPAExtensionsETicket $eTicket): self
    {
        $this->eTicket = $eTicket;

        return $this;
    }
}
