<?php

namespace Ammonkc\SabreApi\Model\InstaFlightsSearch;

use Ammonkc\SabreApi\AbstractModel;

class AirItinerary extends AbstractModel
{
    /**
     * Identifies the type of trip.

    If returndate is specified, then the value is Return.

     *
     * @var string
     */
    protected $directionInd;
    /**
     * @var AirItineraryOriginDestinationOptions
     */
    protected $originDestinationOptions;

    /**
     * Identifies the type of trip.

    If returndate is specified, then the value is Return.

     *
     * @return string
     */
    public function getDirectionInd(): ?string
    {
        return $this->directionInd;
    }

    /**
     * Identifies the type of trip.

    If returndate is specified, then the value is Return.

     *
     * @param string $directionInd
     *
     * @return self
     */
    public function setDirectionInd(?string $directionInd): self
    {
        $this->directionInd = $directionInd;

        return $this;
    }

    /**
     * @return AirItineraryOriginDestinationOptions
     */
    public function getOriginDestinationOptions(): ?AirItineraryOriginDestinationOptions
    {
        return $this->originDestinationOptions;
    }

    /**
     * @param AirItineraryOriginDestinationOptions $originDestinationOptions
     *
     * @return self
     */
    public function setOriginDestinationOptions(?AirItineraryOriginDestinationOptions $originDestinationOptions): self
    {
        $this->originDestinationOptions = $originDestinationOptions;

        return $this;
    }
}
