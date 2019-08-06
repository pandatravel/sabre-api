<?php

namespace Ammonkc\SabreApi\Model\CityPairLookup;

use Ammonkc\SabreApi\AbstractModel;

class ForecastCityPairLookupResponse extends AbstractModel
{
    /**
     * @var CommonLinksItem[]
     */
    protected $links;
    /**
     * @var CityPairLookupResponseOriginDestinationLocationsItem[]
     */
    protected $originDestinationLocations;

    /**
     * @return CommonLinksItem[]
     */
    public function getLinks(): ?array
    {
        return $this->links;
    }

    /**
     * @param CommonLinksItem[] $links
     *
     * @return self
     */
    public function setLinks(?array $links): self
    {
        $this->links = $links;

        return $this;
    }

    /**
     * @return CityPairLookupResponseOriginDestinationLocationsItem[]
     */
    public function getOriginDestinationLocations(): ?array
    {
        return $this->originDestinationLocations;
    }

    /**
     * @param CityPairLookupResponseOriginDestinationLocationsItem[] $originDestinationLocations
     *
     * @return self
     */
    public function setOriginDestinationLocations(?array $originDestinationLocations): self
    {
        $this->originDestinationLocations = $originDestinationLocations;

        return $this;
    }
}
