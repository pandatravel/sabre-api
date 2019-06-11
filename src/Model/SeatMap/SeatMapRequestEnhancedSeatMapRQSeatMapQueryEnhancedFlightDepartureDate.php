<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\SeatMap\Model;

class SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedFlightDepartureDate
{
    /**
     * Departure time this segment in local time.
     *
     * @var string
     */
    protected $localTime;

    /**
     * Departure time this segment in local time.
     *
     * @return string
     */
    public function getLocalTime(): ?string
    {
        return $this->localTime;
    }

    /**
     * Departure time this segment in local time.
     *
     * @param string $localTime
     *
     * @return self
     */
    public function setLocalTime(?string $localTime): self
    {
        $this->localTime = $localTime;

        return $this;
    }
}
