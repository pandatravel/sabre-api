<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305StopoverTypeStopoverPoint extends AbstractModel
{
    /**
     * @var string
     */
    protected $locationCode;
    /**
     * @var string
     */
    protected $locationType;

    /**
     * @return string
     */
    public function getLocationCode(): string
    {
        return $this->locationCode;
    }

    /**
     * @param string $locationCode
     *
     * @return self
     */
    public function setLocationCode(string $locationCode): self
    {
        $this->locationCode = $locationCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getLocationType(): string
    {
        return $this->locationType;
    }

    /**
     * @param string $locationType
     *
     * @return self
     */
    public function setLocationType(string $locationType): self
    {
        $this->locationType = $locationType;

        return $this;
    }
}
