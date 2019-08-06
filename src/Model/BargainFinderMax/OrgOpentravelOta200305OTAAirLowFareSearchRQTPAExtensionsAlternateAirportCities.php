<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsAlternateAirportCities extends AbstractModel
{
    /**
     * @var OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsAlternateAirportCitiesAlternateLocation[]
     */
    protected $alternateLocation;
    /**
     * A desired location (airport city).
     *
     * @var OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsAlternateAirportCitiesSpecifiedLocation
     */
    protected $specifiedLocation;

    /**
     * @return OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsAlternateAirportCitiesAlternateLocation[]
     */
    public function getAlternateLocation(): array
    {
        return $this->alternateLocation;
    }

    /**
     * @param OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsAlternateAirportCitiesAlternateLocation[] $alternateLocation
     *
     * @return self
     */
    public function setAlternateLocation(array $alternateLocation): self
    {
        $this->alternateLocation = $alternateLocation;

        return $this;
    }

    /**
     * A desired location (airport city).
     *
     * @return OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsAlternateAirportCitiesSpecifiedLocation
     */
    public function getSpecifiedLocation(): OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsAlternateAirportCitiesSpecifiedLocation
    {
        return $this->specifiedLocation;
    }

    /**
     * A desired location (airport city).
     *
     * @param OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsAlternateAirportCitiesSpecifiedLocation $specifiedLocation
     *
     * @return self
     */
    public function setSpecifiedLocation(OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsAlternateAirportCitiesSpecifiedLocation $specifiedLocation): self
    {
        $this->specifiedLocation = $specifiedLocation;

        return $this;
    }
}
