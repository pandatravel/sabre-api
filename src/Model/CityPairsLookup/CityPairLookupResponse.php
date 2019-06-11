<?php

namespace Ammonkc\SabreApi\Model\CityPairsLookup;

use Ammonkc\SabreApi\AbstractModel;

class CityPairLookupResponse extends AbstractModel
{
    /**
     * @var CityPairLookupResponseOriginDestinationLocationsItem[]
     */
    protected $originDestinationLocations;
    /**
     * @var CommonLinksItem[]
     */
    protected $links;

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
}
