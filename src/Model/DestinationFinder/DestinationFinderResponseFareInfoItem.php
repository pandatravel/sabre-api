<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\DestinationFinder;

use Ammonkc\SabreApi\AbstractModel;

class DestinationFinderResponseFareInfoItem extends AbstractModel
{
    /**
     * 3-letter currency code.

    If no shopped fare data is found, then the API returns a string: 'N/A'.

     *
     * @var string
     */
    protected $currencyCode;
    /**
     * 3-letter IATA destination airport code.
     *
     * @var string
     */
    protected $destinationLocation;
    /**
     * Returns the specified departure date in the time zone of the origin airport.
     *
     * @var string
     */
    protected $departureDateTime;
    /**
     * Returns the specified return date in the time zone of the destination airport.
     *
     * @var string
     */
    protected $returnDateTime;
    /**
     * Finds destination airport codes associated with a travel theme.
     *
     * @var string
     */
    protected $theme;
    /**
     * Returns destination rank in descending order by popularity (1 = most popular, 50 = least popular).
     *
     * @var float
     */
    protected $destinationRank;
    /**
     * Returns the specified location.
     *
     * @var string
     */
    protected $location;
    /**
     * Retrieves destination airport codes that are associated with the specified region.

    Valid values: Any valid custom or supported Sabre region.

     *
     * @var string
     */
    protected $region;
    /**
     * If no shopped fare data is found, then the API returns a string: 'N/A'.
     *
     * @var DestinationFinderResponseFareInfoItemLowestNonStopFare
     */
    protected $lowestNonStopFare;
    /**
     * If no shopped fare data is found, then the API returns a string: 'N/A'.
     *
     * @var DestinationFinderResponseFareInfoItemLowestFare
     */
    protected $lowestFare;
    /**
     * The distance in miles from origin to destination.

    Invokes the Calculate Air Mileage API

     *
     * @var float
     */
    protected $distance;
    /**
     * The price per mile of the retrieved fare.

    If no shopped fare data is found, then the API returns a string: 'N/A'.

     *
     * @var float
     */
    protected $pricePerMile;
    /**
     * Array of links for different types of relations, e.g. self, linkTemplate, shop.
     *
     * @var DestinationFinderResponseFareInfoItemLinksItem[]
     */
    protected $links;

    /**
     * 3-letter currency code.

    If no shopped fare data is found, then the API returns a string: 'N/A'.

     *
     * @return string
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    /**
     * 3-letter currency code.

    If no shopped fare data is found, then the API returns a string: 'N/A'.

     *
     * @param string $currencyCode
     *
     * @return self
     */
    public function setCurrencyCode(?string $currencyCode): self
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * 3-letter IATA destination airport code.
     *
     * @return string
     */
    public function getDestinationLocation(): ?string
    {
        return $this->destinationLocation;
    }

    /**
     * 3-letter IATA destination airport code.
     *
     * @param string $destinationLocation
     *
     * @return self
     */
    public function setDestinationLocation(?string $destinationLocation): self
    {
        $this->destinationLocation = $destinationLocation;

        return $this;
    }

    /**
     * Returns the specified departure date in the time zone of the origin airport.
     *
     * @return string
     */
    public function getDepartureDateTime(): ?string
    {
        return $this->departureDateTime;
    }

    /**
     * Returns the specified departure date in the time zone of the origin airport.
     *
     * @param string $departureDateTime
     *
     * @return self
     */
    public function setDepartureDateTime(?string $departureDateTime): self
    {
        $this->departureDateTime = $departureDateTime;

        return $this;
    }

    /**
     * Returns the specified return date in the time zone of the destination airport.
     *
     * @return string
     */
    public function getReturnDateTime(): ?string
    {
        return $this->returnDateTime;
    }

    /**
     * Returns the specified return date in the time zone of the destination airport.
     *
     * @param string $returnDateTime
     *
     * @return self
     */
    public function setReturnDateTime(?string $returnDateTime): self
    {
        $this->returnDateTime = $returnDateTime;

        return $this;
    }

    /**
     * Finds destination airport codes associated with a travel theme.
     *
     * @return string
     */
    public function getTheme(): ?string
    {
        return $this->theme;
    }

    /**
     * Finds destination airport codes associated with a travel theme.
     *
     * @param string $theme
     *
     * @return self
     */
    public function setTheme(?string $theme): self
    {
        $this->theme = $theme;

        return $this;
    }

    /**
     * Returns destination rank in descending order by popularity (1 = most popular, 50 = least popular).
     *
     * @return float
     */
    public function getDestinationRank(): ?float
    {
        return $this->destinationRank;
    }

    /**
     * Returns destination rank in descending order by popularity (1 = most popular, 50 = least popular).
     *
     * @param float $destinationRank
     *
     * @return self
     */
    public function setDestinationRank(?float $destinationRank): self
    {
        $this->destinationRank = $destinationRank;

        return $this;
    }

    /**
     * Returns the specified location.
     *
     * @return string
     */
    public function getLocation(): ?string
    {
        return $this->location;
    }

    /**
     * Returns the specified location.
     *
     * @param string $location
     *
     * @return self
     */
    public function setLocation(?string $location): self
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Retrieves destination airport codes that are associated with the specified region.

    Valid values: Any valid custom or supported Sabre region.

     *
     * @return string
     */
    public function getRegion(): ?string
    {
        return $this->region;
    }

    /**
     * Retrieves destination airport codes that are associated with the specified region.

    Valid values: Any valid custom or supported Sabre region.

     *
     * @param string $region
     *
     * @return self
     */
    public function setRegion(?string $region): self
    {
        $this->region = $region;

        return $this;
    }

    /**
     * If no shopped fare data is found, then the API returns a string: 'N/A'.
     *
     * @return DestinationFinderResponseFareInfoItemLowestNonStopFare
     */
    public function getLowestNonStopFare(): ?DestinationFinderResponseFareInfoItemLowestNonStopFare
    {
        return $this->lowestNonStopFare;
    }

    /**
     * If no shopped fare data is found, then the API returns a string: 'N/A'.
     *
     * @param DestinationFinderResponseFareInfoItemLowestNonStopFare $lowestNonStopFare
     *
     * @return self
     */
    public function setLowestNonStopFare(?DestinationFinderResponseFareInfoItemLowestNonStopFare $lowestNonStopFare): self
    {
        $this->lowestNonStopFare = $lowestNonStopFare;

        return $this;
    }

    /**
     * If no shopped fare data is found, then the API returns a string: 'N/A'.
     *
     * @return DestinationFinderResponseFareInfoItemLowestFare
     */
    public function getLowestFare(): ?DestinationFinderResponseFareInfoItemLowestFare
    {
        return $this->lowestFare;
    }

    /**
     * If no shopped fare data is found, then the API returns a string: 'N/A'.
     *
     * @param DestinationFinderResponseFareInfoItemLowestFare $lowestFare
     *
     * @return self
     */
    public function setLowestFare(?DestinationFinderResponseFareInfoItemLowestFare $lowestFare): self
    {
        $this->lowestFare = $lowestFare;

        return $this;
    }

    /**
     * The distance in miles from origin to destination.

    Invokes the Calculate Air Mileage API

     *
     * @return float
     */
    public function getDistance(): ?float
    {
        return $this->distance;
    }

    /**
     * The distance in miles from origin to destination.

    Invokes the Calculate Air Mileage API

     *
     * @param float $distance
     *
     * @return self
     */
    public function setDistance(?float $distance): self
    {
        $this->distance = $distance;

        return $this;
    }

    /**
     * The price per mile of the retrieved fare.

    If no shopped fare data is found, then the API returns a string: 'N/A'.

     *
     * @return float
     */
    public function getPricePerMile(): ?float
    {
        return $this->pricePerMile;
    }

    /**
     * The price per mile of the retrieved fare.

    If no shopped fare data is found, then the API returns a string: 'N/A'.

     *
     * @param float $pricePerMile
     *
     * @return self
     */
    public function setPricePerMile(?float $pricePerMile): self
    {
        $this->pricePerMile = $pricePerMile;

        return $this;
    }

    /**
     * Array of links for different types of relations, e.g. self, linkTemplate, shop.
     *
     * @return DestinationFinderResponseFareInfoItemLinksItem[]
     */
    public function getLinks(): ?array
    {
        return $this->links;
    }

    /**
     * Array of links for different types of relations, e.g. self, linkTemplate, shop.
     *
     * @param DestinationFinderResponseFareInfoItemLinksItem[] $links
     *
     * @return self
     */
    public function setLinks(?array $links): self
    {
        $this->links = $links;

        return $this;
    }
}
