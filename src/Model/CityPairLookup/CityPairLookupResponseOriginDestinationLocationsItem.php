<?php

namespace Ammonkc\SabreApi\Model\CityPairLookup;

use Ammonkc\SabreApi\AbstractModel;

class CityPairLookupResponseOriginDestinationLocationsItem extends AbstractModel
{
    /**
     * Contains OriginLocation and DestinationLocation.
     *
     * @var string
     */
    protected $originDestinationLocations;
    /**
     * @var CityPairLookupResponseOriginDestinationLocationsItemOriginLocation
     */
    protected $originLocation;
    /**
     * @var CityPairLookupResponseOriginDestinationLocationsItemDestinationLocation
     */
    protected $destinationLocation;

    /**
     * Contains OriginLocation and DestinationLocation.
     *
     * @return string
     */
    public function getOriginDestinationLocations(): ?string
    {
        return $this->originDestinationLocations;
    }

    /**
     * Contains OriginLocation and DestinationLocation.
     *
     * @param string $originDestinationLocations
     *
     * @return self
     */
    public function setOriginDestinationLocations(?string $originDestinationLocations): self
    {
        $this->originDestinationLocations = $originDestinationLocations;

        return $this;
    }

    /**
     * @return CityPairLookupResponseOriginDestinationLocationsItemOriginLocation
     */
    public function getOriginLocation(): ?CityPairLookupResponseOriginDestinationLocationsItemOriginLocation
    {
        return $this->originLocation;
    }

    /**
     * @param CityPairLookupResponseOriginDestinationLocationsItemOriginLocation $originLocation
     *
     * @return self
     */
    public function setOriginLocation(?CityPairLookupResponseOriginDestinationLocationsItemOriginLocation $originLocation): self
    {
        $this->originLocation = $originLocation;

        return $this;
    }

    /**
     * @return CityPairLookupResponseOriginDestinationLocationsItemDestinationLocation
     */
    public function getDestinationLocation(): ?CityPairLookupResponseOriginDestinationLocationsItemDestinationLocation
    {
        return $this->destinationLocation;
    }

    /**
     * @param CityPairLookupResponseOriginDestinationLocationsItemDestinationLocation $destinationLocation
     *
     * @return self
     */
    public function setDestinationLocation(?CityPairLookupResponseOriginDestinationLocationsItemDestinationLocation $destinationLocation): self
    {
        $this->destinationLocation = $destinationLocation;

        return $this;
    }
}
