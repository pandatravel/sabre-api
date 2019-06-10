<?php

namespace Ammonkc\SabreApi\Model\InstaFlightsSearch;

use Ammonkc\SabreApi\AbstractModel;

class AirItineraryOriginDestinationOptions extends AbstractModel
{
    /**
     * Repeats `ElapsedTime` and the `FlightSegment` array for every flight segment on an itinerary.
     *
     * @var AirItineraryOriginDestinationOptionsOriginDestinationOptionItem[]
     */
    protected $originDestinationOption;

    /**
     * Repeats `ElapsedTime` and the `FlightSegment` array for every flight segment on an itinerary.
     *
     * @return AirItineraryOriginDestinationOptionsOriginDestinationOptionItem[]
     */
    public function getOriginDestinationOption(): ?array
    {
        return $this->originDestinationOption;
    }

    /**
     * Repeats `ElapsedTime` and the `FlightSegment` array for every flight segment on an itinerary.
     *
     * @param AirItineraryOriginDestinationOptionsOriginDestinationOptionItem[] $originDestinationOption
     *
     * @return self
     */
    public function setOriginDestinationOption(?array $originDestinationOption): self
    {
        $this->originDestinationOption = $originDestinationOption;

        return $this;
    }
}
