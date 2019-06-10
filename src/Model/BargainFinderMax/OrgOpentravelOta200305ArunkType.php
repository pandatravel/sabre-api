<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305ArunkType extends AbstractModel
{
    /**
     * Flight destination code.
     *
     * @var OrgOpentravelOta200305RequestLocationType
     */
    protected $destinationLocation;
    /**
     * Flight destination code.
     *
     * @var OrgOpentravelOta200305RequestLocationType
     */
    protected $originLocation;
    /**
     * Side trip information.
     *
     * @var OrgOpentravelOta200305SideTripType
     */
    protected $sideTrip;

    /**
     * Flight destination code.
     *
     * @return OrgOpentravelOta200305RequestLocationType
     */
    public function getDestinationLocation(): ?OrgOpentravelOta200305RequestLocationType
    {
        return $this->destinationLocation;
    }

    /**
     * Flight destination code.
     *
     * @param OrgOpentravelOta200305RequestLocationType $destinationLocation
     *
     * @return self
     */
    public function setDestinationLocation(?OrgOpentravelOta200305RequestLocationType $destinationLocation): self
    {
        $this->destinationLocation = $destinationLocation;

        return $this;
    }

    /**
     * Flight destination code.
     *
     * @return OrgOpentravelOta200305RequestLocationType
     */
    public function getOriginLocation(): ?OrgOpentravelOta200305RequestLocationType
    {
        return $this->originLocation;
    }

    /**
     * Flight destination code.
     *
     * @param OrgOpentravelOta200305RequestLocationType $originLocation
     *
     * @return self
     */
    public function setOriginLocation(?OrgOpentravelOta200305RequestLocationType $originLocation): self
    {
        $this->originLocation = $originLocation;

        return $this;
    }

    /**
     * Side trip information.
     *
     * @return OrgOpentravelOta200305SideTripType
     */
    public function getSideTrip(): ?OrgOpentravelOta200305SideTripType
    {
        return $this->sideTrip;
    }

    /**
     * Side trip information.
     *
     * @param OrgOpentravelOta200305SideTripType $sideTrip
     *
     * @return self
     */
    public function setSideTrip(?OrgOpentravelOta200305SideTripType $sideTrip): self
    {
        $this->sideTrip = $sideTrip;

        return $this;
    }
}
