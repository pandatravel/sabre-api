<?php

namespace Ammonkc\SabreApi\Model\InstaFlightsSearch;

use Ammonkc\SabreApi\AbstractModel;

class AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemStopAirports extends AbstractModel
{
    /**
     * Stop point of flight segment.
     *
     * @var AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemStopAirportsStopAirport
     */
    protected $stopAirport;

    /**
     * Stop point of flight segment.
     *
     * @return AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemStopAirportsStopAirport
     */
    public function getStopAirport(): ?AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemStopAirportsStopAirport
    {
        return $this->stopAirport;
    }

    /**
     * Stop point of flight segment.
     *
     * @param AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemStopAirportsStopAirport $stopAirport
     *
     * @return self
     */
    public function setStopAirport(?AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemStopAirportsStopAirport $stopAirport): self
    {
        $this->stopAirport = $stopAirport;

        return $this;
    }
}
