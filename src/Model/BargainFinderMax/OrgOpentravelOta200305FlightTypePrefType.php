<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305FlightTypePrefType extends AbstractModel
{
    /**
     * @var string
     */
    protected $flightType;
    /**
     * @var string
     */
    protected $maxConnections;
    /**
     * @var string
     */
    protected $preferLevel;

    /**
     * @return string
     */
    public function getFlightType(): string
    {
        return $this->flightType;
    }

    /**
     * @param string $flightType
     *
     * @return self
     */
    public function setFlightType(string $flightType): self
    {
        $this->flightType = $flightType;

        return $this;
    }

    /**
     * @return string
     */
    public function getMaxConnections(): string
    {
        return $this->maxConnections;
    }

    /**
     * @param string $maxConnections
     *
     * @return self
     */
    public function setMaxConnections(string $maxConnections): self
    {
        $this->maxConnections = $maxConnections;

        return $this;
    }

    /**
     * @return string
     */
    public function getPreferLevel(): string
    {
        return $this->preferLevel;
    }

    /**
     * @param string $preferLevel
     *
     * @return self
     */
    public function setPreferLevel(string $preferLevel): self
    {
        $this->preferLevel = $preferLevel;

        return $this;
    }
}
