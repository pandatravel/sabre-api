<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsAlternateAirportCitiesSpecifiedLocation extends AbstractModel
{
    /**
     * @var string
     */
    protected $locationCode;

    /**
     * @return string
     */
    public function getLocationCode(): ?string
    {
        return $this->locationCode;
    }

    /**
     * @param string $locationCode
     *
     * @return self
     */
    public function setLocationCode(?string $locationCode): self
    {
        $this->locationCode = $locationCode;

        return $this;
    }
}
