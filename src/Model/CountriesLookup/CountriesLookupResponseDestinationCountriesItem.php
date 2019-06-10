<?php

namespace Ammonkc\SabreApi\Model\CountriesLookup;

use Ammonkc\SabreApi\AbstractModel;

class CountriesLookupResponseDestinationCountriesItem extends AbstractModel
{
    /**
     * The 2-letter ISO 3166 country code.
     *
     * @var string
     */
    protected $countryCode;
    /**
     * The name of the country that corresponds to CountryCode.
     *
     * @var string
     */
    protected $countryName;

    /**
     * The 2-letter ISO 3166 country code.
     *
     * @return string
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * The 2-letter ISO 3166 country code.
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
     * The name of the country that corresponds to CountryCode.
     *
     * @return string
     */
    public function getCountryName(): ?string
    {
        return $this->countryName;
    }

    /**
     * The name of the country that corresponds to CountryCode.
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
}
