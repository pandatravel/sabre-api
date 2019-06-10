<?php

namespace Ammonkc\SabreApi\Model\InstaFlightsSearch;

use Ammonkc\SabreApi\AbstractModel;

class AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemDisclosureAirline extends AbstractModel
{
    /**
     * Standard 2-character IATA airline code of the disclosure airline.

    The disclosure airline can be returned in `OperatingAirline`.

     *
     * @var string
     */
    protected $code;

    /**
     * Standard 2-character IATA airline code of the disclosure airline.

    The disclosure airline can be returned in `OperatingAirline`.

     *
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Standard 2-character IATA airline code of the disclosure airline.

    The disclosure airline can be returned in `OperatingAirline`.

     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }
}
