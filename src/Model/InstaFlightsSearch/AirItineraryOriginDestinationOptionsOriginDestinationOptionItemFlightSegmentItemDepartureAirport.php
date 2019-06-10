<?php

namespace Ammonkc\SabreApi\Model\InstaFlightsSearch;

use Ammonkc\SabreApi\AbstractModel;

class AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemDepartureAirport extends AbstractModel
{
    /**
     * 3-letter IATA code of the departure airport for the flight segment.
     *
     * @var string
     */
    protected $locationCode;

    /**
     * 3-letter IATA code of the departure airport for the flight segment.
     *
     * @return string
     */
    public function getLocationCode(): ?string
    {
        return $this->locationCode;
    }

    /**
     * 3-letter IATA code of the departure airport for the flight segment.
     *
     * @param string $locationCode
     *
     * @return self
     */
    public function setLocationCode(?string $locationCode): self
    {
        $this->locationCode = $locationCode;

        return $this;
    }
}
