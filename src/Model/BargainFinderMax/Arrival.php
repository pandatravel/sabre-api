<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class Arrival extends AbstractModel
{
    /**
     * @var string
     */
    protected $airport;
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
    protected $dateAdjustment;
    /**
     * @var string
     */
    protected $state;
    /**
     * @var string
     */
    protected $terminal;
    /**
     * @var string
     */
    protected $time;

    /**
     * @return string
     */
    public function getAirport(): string
    {
        return $this->airport;
    }

    /**
     * @param string $airport
     *
     * @return self
     */
    public function setAirport(string $airport): self
    {
        $this->airport = $airport;

        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     *
     * @return self
     */
    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $country
     *
     * @return self
     */
    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return int
     */
    public function getDateAdjustment(): int
    {
        return $this->dateAdjustment;
    }

    /**
     * @param int $dateAdjustment
     *
     * @return self
     */
    public function setDateAdjustment(int $dateAdjustment): self
    {
        $this->dateAdjustment = $dateAdjustment;

        return $this;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state): self
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return string
     */
    public function getTerminal(): string
    {
        return $this->terminal;
    }

    /**
     * @param string $terminal
     *
     * @return self
     */
    public function setTerminal(string $terminal): self
    {
        $this->terminal = $terminal;

        return $this;
    }

    /**
     * @return string
     */
    public function getTime(): string
    {
        return $this->time;
    }

    /**
     * @param string $time
     *
     * @return self
     */
    public function setTime(string $time): self
    {
        $this->time = $time;

        return $this;
    }
}
