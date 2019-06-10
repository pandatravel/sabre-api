<?php

namespace Ammonkc\SabreApi\Model\InstaFlightsSearch;

use Ammonkc\SabreApi\AbstractModel;

class InstaFlightsSearchByTagIDResponse extends AbstractModel
{
    /**
     * The order or position of the itinerary in the response.

    The sequence number can be the value of an offset parameter in the request.

     *
     * @var float
     */
    protected $sequenceNumber;
    /**
     * @var TicketingInfo
     */
    protected $ticketingInfo;
    /**
     * @var TPAExtensions
     */
    protected $tPAExtensions;
    /**
     * @var AirItineraryPricingInfo
     */
    protected $airItineraryPricingInfo;
    /**
     * AirItinerary returns flight itineraries in a `FlightSegment` array.
     *
     * @var AirItinerary
     */
    protected $airItinerary;
    /**
     * Array of links for different types of relations, e.g. self, linkTemplate, shop.
     *
     * @var InstaFlightsSearchByTagIDResponseLinksItem[]
     */
    protected $links;

    /**
     * The order or position of the itinerary in the response.

    The sequence number can be the value of an offset parameter in the request.

     *
     * @return float
     */
    public function getSequenceNumber(): ?float
    {
        return $this->sequenceNumber;
    }

    /**
     * The order or position of the itinerary in the response.

    The sequence number can be the value of an offset parameter in the request.

     *
     * @param float $sequenceNumber
     *
     * @return self
     */
    public function setSequenceNumber(?float $sequenceNumber): self
    {
        $this->sequenceNumber = $sequenceNumber;

        return $this;
    }

    /**
     * @return TicketingInfo
     */
    public function getTicketingInfo(): ?TicketingInfo
    {
        return $this->ticketingInfo;
    }

    /**
     * @param TicketingInfo $ticketingInfo
     *
     * @return self
     */
    public function setTicketingInfo(?TicketingInfo $ticketingInfo): self
    {
        $this->ticketingInfo = $ticketingInfo;

        return $this;
    }

    /**
     * @return TPAExtensions
     */
    public function getTPAExtensions(): ?TPAExtensions
    {
        return $this->tPAExtensions;
    }

    /**
     * @param TPAExtensions $tPAExtensions
     *
     * @return self
     */
    public function setTPAExtensions(?TPAExtensions $tPAExtensions): self
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }

    /**
     * @return AirItineraryPricingInfo
     */
    public function getAirItineraryPricingInfo(): ?AirItineraryPricingInfo
    {
        return $this->airItineraryPricingInfo;
    }

    /**
     * @param AirItineraryPricingInfo $airItineraryPricingInfo
     *
     * @return self
     */
    public function setAirItineraryPricingInfo(?AirItineraryPricingInfo $airItineraryPricingInfo): self
    {
        $this->airItineraryPricingInfo = $airItineraryPricingInfo;

        return $this;
    }

    /**
     * AirItinerary returns flight itineraries in a `FlightSegment` array.
     *
     * @return AirItinerary
     */
    public function getAirItinerary(): ?AirItinerary
    {
        return $this->airItinerary;
    }

    /**
     * AirItinerary returns flight itineraries in a `FlightSegment` array.
     *
     * @param AirItinerary $airItinerary
     *
     * @return self
     */
    public function setAirItinerary(?AirItinerary $airItinerary): self
    {
        $this->airItinerary = $airItinerary;

        return $this;
    }

    /**
     * Array of links for different types of relations, e.g. self, linkTemplate, shop.
     *
     * @return InstaFlightsSearchByTagIDResponseLinksItem[]
     */
    public function getLinks(): ?array
    {
        return $this->links;
    }

    /**
     * Array of links for different types of relations, e.g. self, linkTemplate, shop.
     *
     * @param InstaFlightsSearchByTagIDResponseLinksItem[] $links
     *
     * @return self
     */
    public function setLinks(?array $links): self
    {
        $this->links = $links;

        return $this;
    }
}
