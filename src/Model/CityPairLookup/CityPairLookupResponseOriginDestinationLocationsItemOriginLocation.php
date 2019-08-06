<?php

namespace Ammonkc\SabreApi\Model\CityPairLookup;

use Ammonkc\SabreApi\AbstractModel;

class CityPairLookupResponseOriginDestinationLocationsItemOriginLocation extends AbstractModel
{
    /**
     * 3-letter IATA airport code.
     *
     * @var string
     */
    protected $airportCode;
    /**
     * The name of the airport that corresponds to the airport code.
     *
     * @var string
     */
    protected $airportName;
    /**
     * The city name that corresponds to the 3-letter IATA airport code in `AirportCode`.
     *
     * @var string
     */
    protected $cityName;
    /**
     * The 2-letter ISO 3166 country code that corresponds to the airport code.
     *
     * @var string
     */
    protected $countryCode;
    /**
     * The name of the country that corresponds to `CountryCode`.
     *
     * @var string
     */
    protected $countryName;
    /**
     * The name of the region that is assigned to the country.
     *
     * @var string
     */
    protected $regionName;

    /**
     * 3-letter IATA airport code.
     *
     * @return string
     */
    public function getAirportCode(): ?string
    {
        return $this->airportCode;
    }

    /**
     * 3-letter IATA airport code.
     *
     * @param string $airportCode
     *
     * @return self
     */
    public function setAirportCode(?string $airportCode): self
    {
        $this->airportCode = $airportCode;

        return $this;
    }

    /**
     * The name of the airport that corresponds to the airport code.
     *
     * @return string
     */
    public function getAirportName(): ?string
    {
        return $this->airportName;
    }

    /**
     * The name of the airport that corresponds to the airport code.
     *
     * @param string $airportName
     *
     * @return self
     */
    public function setAirportName(?string $airportName): self
    {
        $this->airportName = $airportName;

        return $this;
    }

    /**
     * The city name that corresponds to the 3-letter IATA airport code in `AirportCode`.
     *
     * @return string
     */
    public function getCityName(): ?string
    {
        return $this->cityName;
    }

    /**
     * The city name that corresponds to the 3-letter IATA airport code in `AirportCode`.
     *
     * @param string $cityName
     *
     * @return self
     */
    public function setCityName(?string $cityName): self
    {
        $this->cityName = $cityName;

        return $this;
    }

    /**
     * The 2-letter ISO 3166 country code that corresponds to the airport code.
     *
     * @return string
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * The 2-letter ISO 3166 country code that corresponds to the airport code.
     *
     * @param string $countryCode
     *
     * @return self
     */
    public function setCountryCode(?string $countryCode): self
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * The name of the country that corresponds to `CountryCode`.
     *
     * @return string
     */
    public function getCountryName(): ?string
    {
        return $this->countryName;
    }

    /**
     * The name of the country that corresponds to `CountryCode`.
     *
     * @param string $countryName
     *
     * @return self
     */
    public function setCountryName(?string $countryName): self
    {
        $this->countryName = $countryName;

        return $this;
    }

    /**
     * The name of the region that is assigned to the country.
     *
     * @return string
     */
    public function getRegionName(): ?string
    {
        return $this->regionName;
    }

    /**
     * The name of the region that is assigned to the country.
     *
     * @param string $regionName
     *
     * @return self
     */
    public function setRegionName(?string $regionName): self
    {
        $this->regionName = $regionName;

        return $this;
    }
}
