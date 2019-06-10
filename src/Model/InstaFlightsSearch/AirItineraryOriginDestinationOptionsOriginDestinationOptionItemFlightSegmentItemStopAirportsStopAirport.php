<?php

namespace Ammonkc\SabreApi\Model\InstaFlightsSearch;

use Ammonkc\SabreApi\AbstractModel;

class AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemStopAirportsStopAirport extends AbstractModel
{
    /**
     * Equipment type.
     *
     * @var string
     */
    protected $equipment;
    /**
     * This date should be of the form YYYY-MM-DDTHH:MM:SS.
     *
     * @var string
     */
    protected $departureDateTime;
    /**
     * This date should be of the form YYYY-MM-DDTHH:MM:SS.
     *
     * @var string
     */
    protected $arrivalDateTime;
    /**
     * Code to describe a location point.
     *
     * @var string
     */
    protected $locationCode;
    /**
     * Elapsed Time in minutes.
     *
     * @var float
     */
    protected $elapsedTime;
    /**
     * Layover time in minutes.
     *
     * @var float
     */
    protected $duration;
    /**
     * GMT time offset in hours.
     *
     * @var float
     */
    protected $gMTOffset;

    /**
     * Equipment type.
     *
     * @return string
     */
    public function getEquipment(): ?string
    {
        return $this->equipment;
    }

    /**
     * Equipment type.
     *
     * @param string $equipment
     *
     * @return self
     */
    public function setEquipment(?string $equipment): self
    {
        $this->equipment = $equipment;

        return $this;
    }

    /**
     * This date should be of the form YYYY-MM-DDTHH:MM:SS.
     *
     * @return string
     */
    public function getDepartureDateTime(): ?string
    {
        return $this->departureDateTime;
    }

    /**
     * This date should be of the form YYYY-MM-DDTHH:MM:SS.
     *
     * @param string $departureDateTime
     *
     * @return self
     */
    public function setDepartureDateTime(?string $departureDateTime): self
    {
        $this->departureDateTime = $departureDateTime;

        return $this;
    }

    /**
     * This date should be of the form YYYY-MM-DDTHH:MM:SS.
     *
     * @return string
     */
    public function getArrivalDateTime(): ?string
    {
        return $this->arrivalDateTime;
    }

    /**
     * This date should be of the form YYYY-MM-DDTHH:MM:SS.
     *
     * @param string $arrivalDateTime
     *
     * @return self
     */
    public function setArrivalDateTime(?string $arrivalDateTime): self
    {
        $this->arrivalDateTime = $arrivalDateTime;

        return $this;
    }

    /**
     * Code to describe a location point.
     *
     * @return string
     */
    public function getLocationCode(): ?string
    {
        return $this->locationCode;
    }

    /**
     * Code to describe a location point.
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

    /**
     * Elapsed Time in minutes.
     *
     * @return float
     */
    public function getElapsedTime(): ?float
    {
        return $this->elapsedTime;
    }

    /**
     * Elapsed Time in minutes.
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
     * Layover time in minutes.
     *
     * @return float
     */
    public function getDuration(): ?float
    {
        return $this->duration;
    }

    /**
     * Layover time in minutes.
     *
     * @param float $duration
     *
     * @return self
     */
    public function setDuration(?float $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * GMT time offset in hours.
     *
     * @return float
     */
    public function getGMTOffset(): ?float
    {
        return $this->gMTOffset;
    }

    /**
     * GMT time offset in hours.
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
