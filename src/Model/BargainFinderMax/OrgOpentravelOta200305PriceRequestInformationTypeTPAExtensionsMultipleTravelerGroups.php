<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsMultipleTravelerGroups extends AbstractModel
{
    /**
     * Indicates desired number of itineraries to be returned in each passenger group at beggining of response.
     *
     * @var int
     */
    protected $itinerariesPerGroup;

    /**
     * Indicates desired number of itineraries to be returned in each passenger group at beggining of response.
     *
     * @return int
     */
    public function getItinerariesPerGroup(): int
    {
        return $this->itinerariesPerGroup;
    }

    /**
     * Indicates desired number of itineraries to be returned in each passenger group at beggining of response.
     *
     * @param int $itinerariesPerGroup
     *
     * @return self
     */
    public function setItinerariesPerGroup(int $itinerariesPerGroup): self
    {
        $this->itinerariesPerGroup = $itinerariesPerGroup;

        return $this;
    }
}
