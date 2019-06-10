<?php

namespace Ammonkc\SabreApi\Model\InstaFlightsSearch;

use Ammonkc\SabreApi\AbstractModel;

class AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemArrivalTimeZone extends AbstractModel
{
    /**
     * Offset from Greenwich Mean Time for the arrival flight.

    This is either a positive or a negative number.

     *
     * @var float
     */
    protected $gMTOffset;

    /**
     * Offset from Greenwich Mean Time for the arrival flight.

    This is either a positive or a negative number.

     *
     * @return float
     */
    public function getGMTOffset(): ?float
    {
        return $this->gMTOffset;
    }

    /**
     * Offset from Greenwich Mean Time for the arrival flight.

    This is either a positive or a negative number.

     *
     * @param float $gMTOffset
     *
     * @return self
     */
    public function setGMTOffset(?float $gMTOffset): self
    {
        $this->gMTOffset = $gMTOffset;

        return $this;
    }
}
