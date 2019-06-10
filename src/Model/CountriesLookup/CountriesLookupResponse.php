<?php

namespace Ammonkc\SabreApi\Model\CountriesLookup;

use Ammonkc\SabreApi\AbstractModel;

class CountriesLookupResponse extends AbstractModel
{
    /**
     * Shows the Point of Sale country code to which the list of countries belongs.
     *
     * @var string
     */
    protected $pointOfSale;
    /**
     * @var CountriesLookupResponseOriginCountriesItem[]
     */
    protected $originCountries;
    /**
     * @var CountriesLookupResponseDestinationCountriesItem[]
     */
    protected $destinationCountries;
    /**
     * @var CommonLinksItem[]
     */
    protected $links;

    /**
     * Shows the Point of Sale country code to which the list of countries belongs.
     *
     * @return string
     */
    public function getPointOfSale(): ?string
    {
        return $this->pointOfSale;
    }

    /**
     * Shows the Point of Sale country code to which the list of countries belongs.
     *
     * @param string $pointOfSale
     *
     * @return self
     */
    public function setPointOfSale(?string $pointOfSale): self
    {
        $this->pointOfSale = $pointOfSale;

        return $this;
    }

    /**
     * @return CountriesLookupResponseOriginCountriesItem[]
     */
    public function getOriginCountries(): ?array
    {
        return $this->originCountries;
    }

    /**
     * @param CountriesLookupResponseOriginCountriesItem[] $originCountries
     *
     * @return self
     */
    public function setOriginCountries(?array $originCountries): self
    {
        $this->originCountries = $originCountries;

        return $this;
    }

    /**
     * @return CountriesLookupResponseDestinationCountriesItem[]
     */
    public function getDestinationCountries(): ?array
    {
        return $this->destinationCountries;
    }

    /**
     * @param CountriesLookupResponseDestinationCountriesItem[] $destinationCountries
     *
     * @return self
     */
    public function setDestinationCountries(?array $destinationCountries): self
    {
        $this->destinationCountries = $destinationCountries;

        return $this;
    }

    /**
     * @return CommonLinksItem[]
     */
    public function getLinks(): ?array
    {
        return $this->links;
    }

    /**
     * @param CommonLinksItem[] $links
     *
     * @return self
     */
    public function setLinks(?array $links): self
    {
        $this->links = $links;

        return $this;
    }
}
