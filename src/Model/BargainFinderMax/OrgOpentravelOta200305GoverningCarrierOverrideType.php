<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305GoverningCarrierOverrideType extends AbstractModel
{
    /**
     * Airline Carrier Code - override the GOVERNING CARRIER to get the fare filed by that carrier.
     *
     * @var string
     */
    protected $airlineCode;

    /**
     * Airline Carrier Code - override the GOVERNING CARRIER to get the fare filed by that carrier.
     *
     * @return string
     */
    public function getAirlineCode(): string
    {
        return $this->airlineCode;
    }

    /**
     * Airline Carrier Code - override the GOVERNING CARRIER to get the fare filed by that carrier.
     *
     * @param string $airlineCode
     *
     * @return self
     */
    public function setAirlineCode(string $airlineCode): self
    {
        $this->airlineCode = $airlineCode;

        return $this;
    }
}
