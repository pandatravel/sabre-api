<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\SeatMap\Model;

class SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedJourneyDataJourneyFlightItem
{
    /**
     * @var SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedJourneyDataJourneyFlightItemFlight
     */
    protected $flight;

    /**
     * @return SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedJourneyDataJourneyFlightItemFlight
     */
    public function getFlight(): ?SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedJourneyDataJourneyFlightItemFlight
    {
        return $this->flight;
    }

    /**
     * @param SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedJourneyDataJourneyFlightItemFlight $flight
     *
     * @return self
     */
    public function setFlight(?SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedJourneyDataJourneyFlightItemFlight $flight): self
    {
        $this->flight = $flight;

        return $this;
    }
}
