<?php

namespace Ammonkc\SabreApi\Model\GeoAutocomplete;

use Ammonkc\SabreApi\AbstractModel;

class GeoAutocompleteResponseResponseGroupedDoclistDocsItem extends AbstractModel
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $city;
    /**
     * @var string
     */
    protected $country;
    /**
     * @var string
     */
    protected $countryName;
    /**
     * @var string
     */
    protected $stateName;
    /**
     * @var string
     */
    protected $state;
    /**
     * @var string
     */
    protected $category;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $dataset;
    /**
     * @var string
     */
    protected $datasource;
    /**
     * Indicates the degree of accuracy in the latitude and longitude (as provided by the geocoding entity).
     *
     * @var string
     */
    protected $confidenceFactor;
    /**
     * @var string
     */
    protected $latitude;
    /**
     * @var string
     */
    protected $longitude;
    /**
     * @var string
     */
    protected $iataCityCode;
    /**
     * A rank (from 1-900) indicates the population density or traffic volume of the place.

    A city is ranked by population (900 indicates a large population).
    An airport is ranked by the number of nonstop flights served from the airport (900 indicates high traffic).

     *
     * @var float
     */
    protected $ranking;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     *
     * @return self
     */
    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $country
     *
     * @return self
     */
    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountryName(): string
    {
        return $this->countryName;
    }

    /**
     * @param string $countryName
     *
     * @return self
     */
    public function setCountryName(string $countryName): self
    {
        $this->countryName = $countryName;

        return $this;
    }

    /**
     * @return string
     */
    public function getStateName(): string
    {
        return $this->stateName;
    }

    /**
     * @param string $stateName
     *
     * @return self
     */
    public function setStateName(string $stateName): self
    {
        $this->stateName = $stateName;

        return $this;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state): self
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * @param string $category
     *
     * @return self
     */
    public function setCategory(string $category): self
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getDataset(): string
    {
        return $this->dataset;
    }

    /**
     * @param string $dataset
     *
     * @return self
     */
    public function setDataset(string $dataset): self
    {
        $this->dataset = $dataset;

        return $this;
    }

    /**
     * @return string
     */
    public function getDatasource(): string
    {
        return $this->datasource;
    }

    /**
     * @param string $datasource
     *
     * @return self
     */
    public function setDatasource(string $datasource): self
    {
        $this->datasource = $datasource;

        return $this;
    }

    /**
     * Indicates the degree of accuracy in the latitude and longitude (as provided by the geocoding entity).
     *
     * @return string
     */
    public function getConfidenceFactor(): string
    {
        return $this->confidenceFactor;
    }

    /**
     * Indicates the degree of accuracy in the latitude and longitude (as provided by the geocoding entity).
     *
     * @param string $confidenceFactor
     *
     * @return self
     */
    public function setConfidenceFactor(string $confidenceFactor): self
    {
        $this->confidenceFactor = $confidenceFactor;

        return $this;
    }

    /**
     * @return string
     */
    public function getLatitude(): string
    {
        return $this->latitude;
    }

    /**
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
     * @return string
     */
    public function getLongitude(): string
    {
        return $this->longitude;
    }

    /**
     * @param string $longitude
     *
     * @return self
     */
    public function setLongitude(string $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * @return string
     */
    public function getIataCityCode(): string
    {
        return $this->iataCityCode;
    }

    /**
     * @param string $iataCityCode
     *
     * @return self
     */
    public function setIataCityCode(string $iataCityCode): self
    {
        $this->iataCityCode = $iataCityCode;

        return $this;
    }

    /**
     * A rank (from 1-900) indicates the population density or traffic volume of the place.

    A city is ranked by population (900 indicates a large population).
    An airport is ranked by the number of nonstop flights served from the airport (900 indicates high traffic).

     *
     * @return float
     */
    public function getRanking(): float
    {
        return $this->ranking;
    }

    /**
     * A rank (from 1-900) indicates the population density or traffic volume of the place.

    A city is ranked by population (900 indicates a large population).
    An airport is ranked by the number of nonstop flights served from the airport (900 indicates high traffic).

     *
     * @param float $ranking
     *
     * @return self
     */
    public function setRanking(float $ranking): self
    {
        $this->ranking = $ranking;

        return $this;
    }
}
