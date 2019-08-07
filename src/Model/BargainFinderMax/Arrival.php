<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

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
     * @return string|null
     */
    public function getAirport(): ?string
    {
        return $this->airport;
    }

    /**
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
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
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
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
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
     * @return int|null
     */
    public function getDateAdjustment(): ?int
    {
        return $this->dateAdjustment;
    }

    /**
     * @param int|null $dateAdjustment
     *
     * @return self
     */
    public function setDateAdjustment(?int $dateAdjustment): self
    {
        $this->dateAdjustment = $dateAdjustment;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
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
     * @return string|null
     */
    public function getTerminal(): ?string
    {
        return $this->terminal;
    }

    /**
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
     * @return string|null
     */
    public function getTime(): ?string
    {
        return $this->time;
    }

    /**
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
