<?php

namespace Ammonkc\SabreApi\Model\PointOfSaleCountryCodeLookup;

use Ammonkc\SabreApi\AbstractModel;

class PointofSaleCountryCodeLookupResponse extends AbstractModel
{
    /**
     * Repeats CountryCode and CountryName for each supported country, along with a cityPairsLookup link for each country.
     *
     * @var PointofSaleCountryCodeLookupResponseCountriesItem[]
     */
    protected $countries;
    /**
     * Array of links for different types of relations, e.g. self, linkTemplate, shop.
     *
     * @var PointofSaleCountryCodeLookupResponseLinksItem[]
     */
    protected $links;

    /**
     * Repeats CountryCode and CountryName for each supported country, along with a cityPairsLookup link for each country.
     *
     * @return PointofSaleCountryCodeLookupResponseCountriesItem[]
     */
    public function getCountries(): ?array
    {
        return $this->countries;
    }

    /**
     * Repeats CountryCode and CountryName for each supported country, along with a cityPairsLookup link for each country.
     *
     * @param PointofSaleCountryCodeLookupResponseCountriesItem[] $countries
     *
     * @return self
     */
    public function setCountries(?array $countries): self
    {
        $this->countries = $countries;

        return $this;
    }

    /**
     * Array of links for different types of relations, e.g. self, linkTemplate, shop.
     *
     * @return PointofSaleCountryCodeLookupResponseLinksItem[]
     */
    public function getLinks(): ?array
    {
        return $this->links;
    }

    /**
     * Array of links for different types of relations, e.g. self, linkTemplate, shop.
     *
     * @param PointofSaleCountryCodeLookupResponseLinksItem[] $links
     *
     * @return self
     */
    public function setLinks(?array $links): self
    {
        $this->links = $links;

        return $this;
    }
}
