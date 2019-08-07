<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class Departure extends AbstractModel
{
    /**
     * Departure airport code.
     *
     * @var string
     */
    protected $airport;
    /**
     * Departure city code.
     *
     * @var string
     */
    protected $city;
    /**
     * Departure country code.
     *
     * @var string
     */
    protected $country;
    /**
     * Departure state code.
     *
     * @var string
     */
    protected $state;
    /**
     * Departure terminal.
     *
     * @var string
     */
    protected $terminal;
    /**
     * Departure time.
     *
     * @var string
     */
    protected $time;

    /**
     * Departure airport code.
     *
     * @return string|null
     */
    public function getAirport(): ?string
    {
        return $this->airport;
    }

    /**
     * Departure airport code.
     *
     * @param string|null $airport
     *
     * @return self
     */
    public function setAirport(?string $airport): self
    {
        $this->airport = $airport;

        return $this;
    }

    /**
     * Departure city code.
     *
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * Departure city code.
     *
     * @param string|null $city
     *
     * @return self
     */
    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Departure country code.
     *
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * Departure country code.
     *
     * @param string|null $country
     *
     * @return self
     */
    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Departure state code.
     *
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * Departure state code.
     *
     * @param string|null $state
     *
     * @return self
     */
    public function setState(?string $state): self
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Departure terminal.
     *
     * @return string|null
     */
    public function getTerminal(): ?string
    {
        return $this->terminal;
    }

    /**
     * Departure terminal.
     *
     * @param string|null $terminal
     *
     * @return self
     */
    public function setTerminal(?string $terminal): self
    {
        $this->terminal = $terminal;

        return $this;
    }

    /**
     * Departure time.
     *
     * @return string|null
     */
    public function getTime(): ?string
    {
        return $this->time;
    }

    /**
     * Departure time.
     *
     * @param string|null $time
     *
     * @return self
     */
    public function setTime(?string $time): self
    {
        $this->time = $time;

        return $this;
    }
}
