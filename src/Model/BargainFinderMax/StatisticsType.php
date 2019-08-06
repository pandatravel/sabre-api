<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class StatisticsType extends AbstractModel
{
    /**
     * Total number of Branded OneWay itineraries returned (sum of itineraries in all legs combined).
     *
     * @var int
     */
    protected $branded;
    /**
     * Number of departed itineraries returned.
     *
     * @var int
     */
    protected $departed;
    /**
     * Number of options returned.
     *
     * @var int
     */
    protected $itineraryCount;
    /**
     * Number of itineraries with missing legs returned.
     *
     * @var int
     */
    protected $legMissed;
    /**
     * Total number of Simple OneWay itineraries returned (sum of itineraries in all legs combined).
     *
     * @var int
     */
    protected $oneWay;
    /**
     * Number of sold out itineraries returned.
     *
     * @var int
     */
    protected $soldOut;

    /**
     * Total number of Branded OneWay itineraries returned (sum of itineraries in all legs combined).
     *
     * @return int
     */
    public function getBranded(): int
    {
        return $this->branded;
    }

    /**
     * Total number of Branded OneWay itineraries returned (sum of itineraries in all legs combined).
     *
     * @param int $branded
     *
     * @return self
     */
    public function setBranded(int $branded): self
    {
        $this->branded = $branded;

        return $this;
    }

    /**
     * Number of departed itineraries returned.
     *
     * @return int
     */
    public function getDeparted(): int
    {
        return $this->departed;
    }

    /**
     * Number of departed itineraries returned.
     *
     * @param int $departed
     *
     * @return self
     */
    public function setDeparted(int $departed): self
    {
        $this->departed = $departed;

        return $this;
    }

    /**
     * Number of options returned.
     *
     * @return int
     */
    public function getItineraryCount(): int
    {
        return $this->itineraryCount;
    }

    /**
     * Number of options returned.
     *
     * @param int $itineraryCount
     *
     * @return self
     */
    public function setItineraryCount(int $itineraryCount): self
    {
        $this->itineraryCount = $itineraryCount;

        return $this;
    }

    /**
     * Number of itineraries with missing legs returned.
     *
     * @return int
     */
    public function getLegMissed(): int
    {
        return $this->legMissed;
    }

    /**
     * Number of itineraries with missing legs returned.
     *
     * @param int $legMissed
     *
     * @return self
     */
    public function setLegMissed(int $legMissed): self
    {
        $this->legMissed = $legMissed;

        return $this;
    }

    /**
     * Total number of Simple OneWay itineraries returned (sum of itineraries in all legs combined).
     *
     * @return int
     */
    public function getOneWay(): int
    {
        return $this->oneWay;
    }

    /**
     * Total number of Simple OneWay itineraries returned (sum of itineraries in all legs combined).
     *
     * @param int $oneWay
     *
     * @return self
     */
    public function setOneWay(int $oneWay): self
    {
        $this->oneWay = $oneWay;

        return $this;
    }

    /**
     * Number of sold out itineraries returned.
     *
     * @return int
     */
    public function getSoldOut(): int
    {
        return $this->soldOut;
    }

    /**
     * Number of sold out itineraries returned.
     *
     * @param int $soldOut
     *
     * @return self
     */
    public function setSoldOut(int $soldOut): self
    {
        $this->soldOut = $soldOut;

        return $this;
    }
}
