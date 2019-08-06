<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305NumTripsType extends AbstractModel
{
    /**
     * @var float
     */
    protected $number;
    /**
     * Maximum number of options to be retrieved for each combination of outbound/inbound dates.
     *
     * @var int
     */
    protected $perDateMax;
    /**
     * Minimum number of options to be retrieved for each combination of outbound/inbound dates.
     *
     * @var int
     */
    protected $perDateMin;
    /**
     * Number of itineraries per market for alternate cities request. It allows to control market diversity only.
     *
     * @var int
     */
    protected $perMarket;
    /**
     * In Advanced Calendar API: Maximum number of itineraries to be retrieved for each departure month and departure/arrival combination.
     *
     * @var int
     */
    protected $perMonth;

    /**
     * @return float
     */
    public function getNumber(): float
    {
        return $this->number;
    }

    /**
     * @param float $number
     *
     * @return self
     */
    public function setNumber(float $number): self
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Maximum number of options to be retrieved for each combination of outbound/inbound dates.
     *
     * @return int
     */
    public function getPerDateMax(): int
    {
        return $this->perDateMax;
    }

    /**
     * Maximum number of options to be retrieved for each combination of outbound/inbound dates.
     *
     * @param int $perDateMax
     *
     * @return self
     */
    public function setPerDateMax(int $perDateMax): self
    {
        $this->perDateMax = $perDateMax;

        return $this;
    }

    /**
     * Minimum number of options to be retrieved for each combination of outbound/inbound dates.
     *
     * @return int
     */
    public function getPerDateMin(): int
    {
        return $this->perDateMin;
    }

    /**
     * Minimum number of options to be retrieved for each combination of outbound/inbound dates.
     *
     * @param int $perDateMin
     *
     * @return self
     */
    public function setPerDateMin(int $perDateMin): self
    {
        $this->perDateMin = $perDateMin;

        return $this;
    }

    /**
     * Number of itineraries per market for alternate cities request. It allows to control market diversity only.
     *
     * @return int
     */
    public function getPerMarket(): int
    {
        return $this->perMarket;
    }

    /**
     * Number of itineraries per market for alternate cities request. It allows to control market diversity only.
     *
     * @param int $perMarket
     *
     * @return self
     */
    public function setPerMarket(int $perMarket): self
    {
        $this->perMarket = $perMarket;

        return $this;
    }

    /**
     * In Advanced Calendar API: Maximum number of itineraries to be retrieved for each departure month and departure/arrival combination.
     *
     * @return int
     */
    public function getPerMonth(): int
    {
        return $this->perMonth;
    }

    /**
     * In Advanced Calendar API: Maximum number of itineraries to be retrieved for each departure month and departure/arrival combination.
     *
     * @param int $perMonth
     *
     * @return self
     */
    public function setPerMonth(int $perMonth): self
    {
        $this->perMonth = $perMonth;

        return $this;
    }
}
