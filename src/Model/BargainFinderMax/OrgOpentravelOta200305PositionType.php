<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305PositionType extends AbstractModel
{
    /**
     * Used for Character Strings, length 1 to 16.
     *
     * @var string
     */
    protected $altitude;
    /**
     * Used for Character Strings, length 1 to 16.
     *
     * @var string
     */
    protected $latitude;
    /**
     * Used for Character Strings, length 1 to 16.
     *
     * @var string
     */
    protected $longitude;

    /**
     * Used for Character Strings, length 1 to 16.
     *
     * @return string
     */
    public function getAltitude(): string
    {
        return $this->altitude;
    }

    /**
     * Used for Character Strings, length 1 to 16.
     *
     * @param string $altitude
     *
     * @return self
     */
    public function setAltitude(string $altitude): self
    {
        $this->altitude = $altitude;

        return $this;
    }

    /**
     * Used for Character Strings, length 1 to 16.
     *
     * @return string
     */
    public function getLatitude(): string
    {
        return $this->latitude;
    }

    /**
     * Used for Character Strings, length 1 to 16.
     *
     * @param string $latitude
     *
     * @return self
     */
    public function setLatitude(string $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Used for Character Strings, length 1 to 16.
     *
     * @return string
     */
    public function getLongitude(): string
    {
        return $this->longitude;
    }

    /**
     * Used for Character Strings, length 1 to 16.
     *
     * @param string $longitude
     *
     * @return self
     */
    public function setLongitude(string $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }
}
