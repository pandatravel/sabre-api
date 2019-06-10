<?php

namespace Ammonkc\SabreApi\Model\InstaFlightsSearch;

use Ammonkc\SabreApi\AbstractModel;

class AirItineraryOriginDestinationOptionsOriginDestinationOptionItem extends AbstractModel
{
    /**
     * The total flight time of this flight segment, from the departure date-time of the flight segment to the arrival date-time of the flight segment.

    The time is calculated in minutes.

     *
     * @var float
     */
    protected $elapsedTime;
    /**
     * Repeats for every flight leg or flight segment on an itinerary.

    FlightSegment has information about a flight segment and the airline companies.
    Repeat factor: The maximum is 4.

     *
     * @var AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItem[]
     */
    protected $flightSegment;

    /**
     * The total flight time of this flight segment, from the departure date-time of the flight segment to the arrival date-time of the flight segment.

    The time is calculated in minutes.

     *
     * @return float
     */
    public function getElapsedTime(): ?float
    {
        return $this->elapsedTime;
    }

    /**
     * The total flight time of this flight segment, from the departure date-time of the flight segment to the arrival date-time of the flight segment.

    The time is calculated in minutes.

     *
     * @param float $elapsedTime
     *
     * @return self
     */
    public function setElapsedTime(?float $elapsedTime): self
    {
        $this->elapsedTime = $elapsedTime;

        return $this;
    }

    /**
     * Repeats for every flight leg or flight segment on an itinerary.

    FlightSegment has information about a flight segment and the airline companies.
    Repeat factor: The maximum is 4.

     *
     * @return AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItem[]
     */
    public function getFlightSegment(): ?array
    {
        return $this->flightSegment;
    }

    /**
     * Repeats for every flight leg or flight segment on an itinerary.

    FlightSegment has information about a flight segment and the airline companies.
    Repeat factor: The maximum is 4.

     *
     * @param AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItem[] $flightSegment
     *
     * @return self
     */
    public function setFlightSegment(?array $flightSegment): self
    {
        $this->flightSegment = $flightSegment;

        return $this;
    }
}
