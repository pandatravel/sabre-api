<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class HiddenStopType extends AbstractModel
{
    /**
     * @var int
     */
    protected $airMiles;
    /**
     * @var string
     */
    protected $airport;
    /**
     * @var int
     */
    protected $arrivalDateAdjustment;
    /**
     * @var string
     */
    protected $arrivalTime;
    /**
     * @var string
     */
    protected $city;
    /**
     * @var string
     */
    protected $country;
    /**
     * @var int
     */
    protected $departureDateAdjustment;
    /**
     * @var string
     */
    protected $departureTime;
    /**
     * @var int
     */
    protected $elapsedLayoverTime;
    /**
     * @var int
     */
    protected $elapsedTime;
    /**
     * @var string
     */
    protected $equipment;
    /**
     * @var string
     */
    protected $state;

    /**
     * @return int
     */
    public function getAirMiles(): ?int
    {
        return $this->airMiles;
    }

    /**
     * @param int $airMiles
     *
     * @return self
     */
    public function setAirMiles(?int $airMiles): self
    {
        $this->airMiles = $airMiles;

        return $this;
    }

    /**
     * @return string
     */
    public function getAirport(): ?string
    {
        return $this->airport;
    }

    /**
     * @param string $airport
     *
     * @return self
     */
    public function setAirport(?string $airport): self
    {
        $this->airport = $airport;

        return $this;
    }

    /**
     * @return int
     */
    public function getArrivalDateAdjustment(): ?int
    {
        return $this->arrivalDateAdjustment;
    }

    /**
     * @param int $arrivalDateAdjustment
     *
     * @return self
     */
    public function setArrivalDateAdjustment(?int $arrivalDateAdjustment): self
    {
        $this->arrivalDateAdjustment = $arrivalDateAdjustment;

        return $this;
    }

    /**
     * @return string
     */
    public function getArrivalTime(): ?string
    {
        return $this->arrivalTime;
    }

    /**
     * @param string $arrivalTime
     *
     * @return self
     */
    public function setArrivalTime(?string $arrivalTime): self
    {
        $this->arrivalTime = $arrivalTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param string $city
     *
     * @return self
     */
    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @param string $country
     *
     * @return self
     */
    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return int
     */
    public function getDepartureDateAdjustment(): ?int
    {
        return $this->departureDateAdjustment;
    }

    /**
     * @param int $departureDateAdjustment
     *
     * @return self
     */
    public function setDepartureDateAdjustment(?int $departureDateAdjustment): self
    {
        $this->departureDateAdjustment = $departureDateAdjustment;

        return $this;
    }

    /**
     * @return string
     */
    public function getDepartureTime(): ?string
    {
        return $this->departureTime;
    }

    /**
     * @param string $departureTime
     *
     * @return self
     */
    public function setDepartureTime(?string $departureTime): self
    {
        $this->departureTime = $departureTime;

        return $this;
    }

    /**
     * @return int
     */
    public function getElapsedLayoverTime(): ?int
    {
        return $this->elapsedLayoverTime;
    }

    /**
     * @param int $elapsedLayoverTime
     *
     * @return self
     */
    public function setElapsedLayoverTime(?int $elapsedLayoverTime): self
    {
        $this->elapsedLayoverTime = $elapsedLayoverTime;

        return $this;
    }

    /**
     * @return int
     */
    public function getElapsedTime(): ?int
    {
        return $this->elapsedTime;
    }

    /**
     * @param int $elapsedTime
     *
     * @return self
     */
    public function setElapsedTime(?int $elapsedTime): self
    {
        $this->elapsedTime = $elapsedTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getEquipment(): ?string
    {
        return $this->equipment;
    }

    /**
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
     * @return string
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * @param string $state
     *
     * @return self
     */
    public function setState(?string $state): self
    {
        $this->state = $state;

        return $this;
    }
}
