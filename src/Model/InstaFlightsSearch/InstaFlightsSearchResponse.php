<?php

namespace Ammonkc\SabreApi\Model\InstaFlightsSearch;

use Ammonkc\SabreApi\AbstractModel;

class InstaFlightsSearchResponse extends AbstractModel
{
    /**
     * Returns the specified return date of the destination airport.

     Data format: YYYY-MM-DD

     *
     * @var string
     */
    protected $returnDateTime;
    /**
     * Returns the specified departure date of the origin airport.

    Data format: YYYY-MM-DD

     *
     * @var string
     */
    protected $departureDateTime;
    /**
     * Returns the specified 3-letter IATA destination airport or multi-airport city (MAC) code.
     *
     * @var string
     */
    protected $destinationLocation;
    /**
     * Returns the specified 3-letter IATA origin airport or multi-airport city (MAC) code.
     *
     * @var string
     */
    protected $originLocation;
    /**
     * Repeats for every itinerary in the response.
     *
     * @var InstaFlightsSearchResponsePricedItinerariesItem[]
     */
    protected $pricedItineraries;
    /**
     * Returns associated "pagination" information.
     *
     * @var InstaFlightsSearchResponsePage
     */
    protected $page;
    /**
     * Array of links for different types of relations, e.g. self, linkTemplate, shop.
     *
     * @var InstaFlightsSearchResponseLinksItem[]
     */
    protected $links;

    /**
     * Returns the specified return date of the destination airport.

     Data format: YYYY-MM-DD

     *
     * @return string
     */
    public function getReturnDateTime(): ?string
    {
        return $this->returnDateTime;
    }

    /**
     * Returns the specified return date of the destination airport.

     Data format: YYYY-MM-DD

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
     * Returns the specified departure date of the origin airport.

    Data format: YYYY-MM-DD

     *
     * @return string
     */
    public function getDepartureDateTime(): ?string
    {
        return $this->departureDateTime;
    }

    /**
     * Returns the specified departure date of the origin airport.

    Data format: YYYY-MM-DD

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
     * Returns the specified 3-letter IATA destination airport or multi-airport city (MAC) code.
     *
     * @return string
     */
    public function getDestinationLocation(): ?string
    {
        return $this->destinationLocation;
    }

    /**
     * Returns the specified 3-letter IATA destination airport or multi-airport city (MAC) code.
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
     * Returns the specified 3-letter IATA origin airport or multi-airport city (MAC) code.
     *
     * @return string
     */
    public function getOriginLocation(): ?string
    {
        return $this->originLocation;
    }

    /**
     * Returns the specified 3-letter IATA origin airport or multi-airport city (MAC) code.
     *
     * @param string $originLocation
     *
     * @return self
     */
    public function setOriginLocation(?string $originLocation): self
    {
        $this->originLocation = $originLocation;

        return $this;
    }

    /**
     * Repeats for every itinerary in the response.
     *
     * @return InstaFlightsSearchResponsePricedItinerariesItem[]
     */
    public function getPricedItineraries(): ?array
    {
        return $this->pricedItineraries;
    }

    /**
     * Repeats for every itinerary in the response.
     *
     * @param InstaFlightsSearchResponsePricedItinerariesItem[] $pricedItineraries
     *
     * @return self
     */
    public function setPricedItineraries(?array $pricedItineraries): self
    {
        $this->pricedItineraries = $pricedItineraries;

        return $this;
    }

    /**
     * Returns associated "pagination" information.
     *
     * @return InstaFlightsSearchResponsePage
     */
    public function getPage(): ?InstaFlightsSearchResponsePage
    {
        return $this->page;
    }

    /**
     * Returns associated "pagination" information.
     *
     * @param InstaFlightsSearchResponsePage $page
     *
     * @return self
     */
    public function setPage(?InstaFlightsSearchResponsePage $page): self
    {
        $this->page = $page;

        return $this;
    }

    /**
     * Array of links for different types of relations, e.g. self, linkTemplate, shop.
     *
     * @return InstaFlightsSearchResponseLinksItem[]
     */
    public function getLinks(): ?array
    {
        return $this->links;
    }

    /**
     * Array of links for different types of relations, e.g. self, linkTemplate, shop.
     *
     * @param InstaFlightsSearchResponseLinksItem[] $links
     *
     * @return self
     */
    public function setLinks(?array $links): self
    {
        $this->links = $links;

        return $this;
    }
}
