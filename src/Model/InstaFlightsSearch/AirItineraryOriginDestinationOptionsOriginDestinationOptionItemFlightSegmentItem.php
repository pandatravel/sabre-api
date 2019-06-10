<?php

namespace Ammonkc\SabreApi\Model\InstaFlightsSearch;

use Ammonkc\SabreApi\AbstractModel;

class AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItem extends AbstractModel
{
    /**
     * Quantity of hidden stops on a flight number.

    Return values: 0-99.

     *
     * @var float
     */
    protected $stopQuantity;
    /**
     * It can be one 'StopAirport' object for 'FlightSegment' with one stop.
    For more than one stops it is 'array' of more 'StopAirport' objects.

     *
     * @var AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemStopAirports
     */
    protected $stopAirports;
    /**
     * @var AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemDisclosureAirline
     */
    protected $disclosureAirline;
    /**
     * The total flight time of this flight segment, from the departure date-time of the flight segment to the arrival date-time of the flight segment.

    The time is calculated in minutes.

     *
     * @var float
     */
    protected $elapsedTime;
    /**
     * A code for the booking class of service that the carrier specifies for the flight segment.

    1 or 2 uppercase alphabetic characters with a space.

     *
     * @var string
     */
    protected $resBookDesigCode;
    /**
     * Departure date-time of a flight segment.

    Data format: YYYY-MM-DDTHH:MM:SS
    Time zones are specific to arrival and departure airports.

     *
     * @var string
     */
    protected $departureDateTime;
    /**
     * Arrival date-time of a flight segment.

    Data format: YYYY-MM-DDTHH:MM:SS
    Time zones are specific to arrival and departure airports.

     *
     * @var string
     */
    protected $arrivalDateTime;
    /**
     * Identifying number that the marketing airline assigns to the flight segment.

    The flight number of the flight. This is required for use with scheduled airline messages, but may be omitted for requests by tour operators.

     *
     * @var float
     */
    protected $flightNumber;
    /**
     * Group of connecting flights that must be processed as one unit.

    O – Next segment to be married.
    I – Previous segment to be married.

     *
     * @var string
     */
    protected $marriageGrp;
    /**
     * @var AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemDepartureAirport
     */
    protected $departureAirport;
    /**
     * @var AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemArrivalAirport
     */
    protected $arrivalAirport;
    /**
     * @var AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemMarketingAirline
     */
    protected $marketingAirline;
    /**
     * @var AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemArrivalTimeZone
     */
    protected $arrivalTimeZone;
    /**
     * @var AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemEquipment
     */
    protected $equipment;
    /**
     * @var AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemOnTimePerformance
     */
    protected $onTimePerformance;
    /**
     * @var AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemOperatingAirline
     */
    protected $operatingAirline;
    /**
     * @var AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemDepartureTimeZone
     */
    protected $departureTimeZone;
    /**
     * @var AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemTPAExtensions
     */
    protected $tPAExtensions;

    /**
     * Quantity of hidden stops on a flight number.

    Return values: 0-99.

     *
     * @return float
     */
    public function getStopQuantity(): ?float
    {
        return $this->stopQuantity;
    }

    /**
     * Quantity of hidden stops on a flight number.

    Return values: 0-99.

     *
     * @param float $stopQuantity
     *
     * @return self
     */
    public function setStopQuantity(?float $stopQuantity): self
    {
        $this->stopQuantity = $stopQuantity;

        return $this;
    }

    /**
     * It can be one 'StopAirport' object for 'FlightSegment' with one stop.
    For more than one stops it is 'array' of more 'StopAirport' objects.

     *
     * @return AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemStopAirports
     */
    public function getStopAirports(): ?AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemStopAirports
    {
        return $this->stopAirports;
    }

    /**
     * It can be one 'StopAirport' object for 'FlightSegment' with one stop.
    For more than one stops it is 'array' of more 'StopAirport' objects.

     *
     * @param AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemStopAirports $stopAirports
     *
     * @return self
     */
    public function setStopAirports(?AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemStopAirports $stopAirports): self
    {
        $this->stopAirports = $stopAirports;

        return $this;
    }

    /**
     * @return AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemDisclosureAirline
     */
    public function getDisclosureAirline(): ?AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemDisclosureAirline
    {
        return $this->disclosureAirline;
    }

    /**
     * @param AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemDisclosureAirline $disclosureAirline
     *
     * @return self
     */
    public function setDisclosureAirline(?AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemDisclosureAirline $disclosureAirline): self
    {
        $this->disclosureAirline = $disclosureAirline;

        return $this;
    }

    /**
     * The total flight time of this flight segment, from the departure date-time of the flight segment to the arrival date-time of the flight segment.

    The time is calculated in minutes.

     *
     * @return float
     */
    public function getElapsedTime(): ?float
    {
        return $this->elapsedTime;
    }

    /**
     * The total flight time of this flight segment, from the departure date-time of the flight segment to the arrival date-time of the flight segment.

    The time is calculated in minutes.

     *
     * @param float $elapsedTime
     *
     * @return self
     */
    public function setElapsedTime(?float $elapsedTime): self
    {
        $this->elapsedTime = $elapsedTime;

        return $this;
    }

    /**
     * A code for the booking class of service that the carrier specifies for the flight segment.

    1 or 2 uppercase alphabetic characters with a space.

     *
     * @return string
     */
    public function getResBookDesigCode(): ?string
    {
        return $this->resBookDesigCode;
    }

    /**
     * A code for the booking class of service that the carrier specifies for the flight segment.

    1 or 2 uppercase alphabetic characters with a space.

     *
     * @param string $resBookDesigCode
     *
     * @return self
     */
    public function setResBookDesigCode(?string $resBookDesigCode): self
    {
        $this->resBookDesigCode = $resBookDesigCode;

        return $this;
    }

    /**
     * Departure date-time of a flight segment.

    Data format: YYYY-MM-DDTHH:MM:SS
    Time zones are specific to arrival and departure airports.

     *
     * @return string
     */
    public function getDepartureDateTime(): ?string
    {
        return $this->departureDateTime;
    }

    /**
     * Departure date-time of a flight segment.

    Data format: YYYY-MM-DDTHH:MM:SS
    Time zones are specific to arrival and departure airports.

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
     * Arrival date-time of a flight segment.

    Data format: YYYY-MM-DDTHH:MM:SS
    Time zones are specific to arrival and departure airports.

     *
     * @return string
     */
    public function getArrivalDateTime(): ?string
    {
        return $this->arrivalDateTime;
    }

    /**
     * Arrival date-time of a flight segment.

    Data format: YYYY-MM-DDTHH:MM:SS
    Time zones are specific to arrival and departure airports.

     *
     * @param string $arrivalDateTime
     *
     * @return self
     */
    public function setArrivalDateTime(?string $arrivalDateTime): self
    {
        $this->arrivalDateTime = $arrivalDateTime;

        return $this;
    }

    /**
     * Identifying number that the marketing airline assigns to the flight segment.

    The flight number of the flight. This is required for use with scheduled airline messages, but may be omitted for requests by tour operators.

     *
     * @return float
     */
    public function getFlightNumber(): ?float
    {
        return $this->flightNumber;
    }

    /**
     * Identifying number that the marketing airline assigns to the flight segment.

    The flight number of the flight. This is required for use with scheduled airline messages, but may be omitted for requests by tour operators.

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
     * Group of connecting flights that must be processed as one unit.

    O – Next segment to be married.
    I – Previous segment to be married.

     *
     * @return string
     */
    public function getMarriageGrp(): ?string
    {
        return $this->marriageGrp;
    }

    /**
     * Group of connecting flights that must be processed as one unit.

    O – Next segment to be married.
    I – Previous segment to be married.

     *
     * @param string $marriageGrp
     *
     * @return self
     */
    public function setMarriageGrp(?string $marriageGrp): self
    {
        $this->marriageGrp = $marriageGrp;

        return $this;
    }

    /**
     * @return AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemDepartureAirport
     */
    public function getDepartureAirport(): ?AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemDepartureAirport
    {
        return $this->departureAirport;
    }

    /**
     * @param AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemDepartureAirport $departureAirport
     *
     * @return self
     */
    public function setDepartureAirport(?AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemDepartureAirport $departureAirport): self
    {
        $this->departureAirport = $departureAirport;

        return $this;
    }

    /**
     * @return AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemArrivalAirport
     */
    public function getArrivalAirport(): ?AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemArrivalAirport
    {
        return $this->arrivalAirport;
    }

    /**
     * @param AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemArrivalAirport $arrivalAirport
     *
     * @return self
     */
    public function setArrivalAirport(?AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemArrivalAirport $arrivalAirport): self
    {
        $this->arrivalAirport = $arrivalAirport;

        return $this;
    }

    /**
     * @return AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemMarketingAirline
     */
    public function getMarketingAirline(): ?AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemMarketingAirline
    {
        return $this->marketingAirline;
    }

    /**
     * @param AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemMarketingAirline $marketingAirline
     *
     * @return self
     */
    public function setMarketingAirline(?AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemMarketingAirline $marketingAirline): self
    {
        $this->marketingAirline = $marketingAirline;

        return $this;
    }

    /**
     * @return AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemArrivalTimeZone
     */
    public function getArrivalTimeZone(): ?AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemArrivalTimeZone
    {
        return $this->arrivalTimeZone;
    }

    /**
     * @param AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemArrivalTimeZone $arrivalTimeZone
     *
     * @return self
     */
    public function setArrivalTimeZone(?AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemArrivalTimeZone $arrivalTimeZone): self
    {
        $this->arrivalTimeZone = $arrivalTimeZone;

        return $this;
    }

    /**
     * @return AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemEquipment
     */
    public function getEquipment(): ?AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemEquipment
    {
        return $this->equipment;
    }

    /**
     * @param AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemEquipment $equipment
     *
     * @return self
     */
    public function setEquipment(?AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemEquipment $equipment): self
    {
        $this->equipment = $equipment;

        return $this;
    }

    /**
     * @return AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemOnTimePerformance
     */
    public function getOnTimePerformance(): ?AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemOnTimePerformance
    {
        return $this->onTimePerformance;
    }

    /**
     * @param AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemOnTimePerformance $onTimePerformance
     *
     * @return self
     */
    public function setOnTimePerformance(?AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemOnTimePerformance $onTimePerformance): self
    {
        $this->onTimePerformance = $onTimePerformance;

        return $this;
    }

    /**
     * @return AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemOperatingAirline
     */
    public function getOperatingAirline(): ?AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemOperatingAirline
    {
        return $this->operatingAirline;
    }

    /**
     * @param AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemOperatingAirline $operatingAirline
     *
     * @return self
     */
    public function setOperatingAirline(?AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemOperatingAirline $operatingAirline): self
    {
        $this->operatingAirline = $operatingAirline;

        return $this;
    }

    /**
     * @return AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemDepartureTimeZone
     */
    public function getDepartureTimeZone(): ?AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemDepartureTimeZone
    {
        return $this->departureTimeZone;
    }

    /**
     * @param AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemDepartureTimeZone $departureTimeZone
     *
     * @return self
     */
    public function setDepartureTimeZone(?AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemDepartureTimeZone $departureTimeZone): self
    {
        $this->departureTimeZone = $departureTimeZone;

        return $this;
    }

    /**
     * @return AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemTPAExtensions
     */
    public function getTPAExtensions(): ?AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemTPAExtensions
    {
        return $this->tPAExtensions;
    }

    /**
     * @param AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemTPAExtensions $tPAExtensions
     *
     * @return self
     */
    public function setTPAExtensions(?AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemTPAExtensions $tPAExtensions): self
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }
}
