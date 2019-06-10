<?php

namespace Ammonkc\SabreApi\Model\InstaFlightsSearch;

use Ammonkc\SabreApi\AbstractModel;

class AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemOperatingAirline extends AbstractModel
{
    /**
     * Identifying number that the operating airline company assigns to the flight.
     *
     * @var float
     */
    protected $flightNumber;
    /**
     * Standard IATA airline code of the airline that operates the flight segment.

    The operating airline can also be the disclosure airline. This is used for codeshare flights.
    If the operating and marketing airlines are the same, the values in OperatingAirline and MarketingAirline match.

     *
     * @var string
     */
    protected $code;
    /**
     * Short name of the company.

    1 to 64 characters

     *
     * @var string
     */
    protected $companyShortName;

    /**
     * Identifying number that the operating airline company assigns to the flight.
     *
     * @return float
     */
    public function getFlightNumber(): ?float
    {
        return $this->flightNumber;
    }

    /**
     * Identifying number that the operating airline company assigns to the flight.
     *
     * @param float $flightNumber
     *
     * @return self
     */
    public function setFlightNumber(?float $flightNumber): self
    {
        $this->flightNumber = $flightNumber;

        return $this;
    }

    /**
     * Standard IATA airline code of the airline that operates the flight segment.

    The operating airline can also be the disclosure airline. This is used for codeshare flights.
    If the operating and marketing airlines are the same, the values in OperatingAirline and MarketingAirline match.

     *
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Standard IATA airline code of the airline that operates the flight segment.

    The operating airline can also be the disclosure airline. This is used for codeshare flights.
    If the operating and marketing airlines are the same, the values in OperatingAirline and MarketingAirline match.

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

    /**
     * Short name of the company.

    1 to 64 characters

     *
     * @return string
     */
    public function getCompanyShortName(): ?string
    {
        return $this->companyShortName;
    }

    /**
     * Short name of the company.

    1 to 64 characters

     *
     * @param string $companyShortName
     *
     * @return self
     */
    public function setCompanyShortName(?string $companyShortName): self
    {
        $this->companyShortName = $companyShortName;

        return $this;
    }
}
