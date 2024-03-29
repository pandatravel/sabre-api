<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\SeatMap\Model;

class SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedFlight
{
    /**
     * flight aircraft configuration.
     *
     * @var mixed
     */
    protected $aircraftConfigNumber;
    /**
     * status of flight like open, close, boarding, etc.
     *
     * @var string
     */
    protected $status;
    /**
     * @var mixed
     */
    protected $extensionPointSummary;
    /**
     * IATA airport code.
     *
     * @var string
     */
    protected $destination;
    /**
     * IATA airport code.
     *
     * @var string
     */
    protected $origin;
    /**
     * Departure date this segment.
     *
     * @var SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedFlightDepartureDate
     */
    protected $departureDate;
    /**
     * Operating Airline.
     *
     * @var SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedFlightOperating
     */
    protected $operating;
    /**
     * Arrival date this segment.
     *
     * @var SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedFlightArrivalDate
     */
    protected $arrivalDate;
    /**
     * Marketing Airline.
     *
     * @var SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedFlightMarketingItem[]
     */
    protected $marketing;

    /**
     * flight aircraft configuration.
     *
     * @return mixed
     */
    public function getAircraftConfigNumber()
    {
        return $this->aircraftConfigNumber;
    }

    /**
     * flight aircraft configuration.
     *
     * @param mixed $aircraftConfigNumber
     *
     * @return self
     */
    public function setAircraftConfigNumber($aircraftConfigNumber): self
    {
        $this->aircraftConfigNumber = $aircraftConfigNumber;

        return $this;
    }

    /**
     * status of flight like open, close, boarding, etc.
     *
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * status of flight like open, close, boarding, etc.
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getExtensionPointSummary()
    {
        return $this->extensionPointSummary;
    }

    /**
     * @param mixed $extensionPointSummary
     *
     * @return self
     */
    public function setExtensionPointSummary($extensionPointSummary): self
    {
        $this->extensionPointSummary = $extensionPointSummary;

        return $this;
    }

    /**
     * IATA airport code.
     *
     * @return string
     */
    public function getDestination(): ?string
    {
        return $this->destination;
    }

    /**
     * IATA airport code.
     *
     * @param string $destination
     *
     * @return self
     */
    public function setDestination(?string $destination): self
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * IATA airport code.
     *
     * @return string
     */
    public function getOrigin(): ?string
    {
        return $this->origin;
    }

    /**
     * IATA airport code.
     *
     * @param string $origin
     *
     * @return self
     */
    public function setOrigin(?string $origin): self
    {
        $this->origin = $origin;

        return $this;
    }

    /**
     * Departure date this segment.
     *
     * @return SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedFlightDepartureDate
     */
    public function getDepartureDate(): ?SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedFlightDepartureDate
    {
        return $this->departureDate;
    }

    /**
     * Departure date this segment.
     *
     * @param SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedFlightDepartureDate $departureDate
     *
     * @return self
     */
    public function setDepartureDate(?SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedFlightDepartureDate $departureDate): self
    {
        $this->departureDate = $departureDate;

        return $this;
    }

    /**
     * Operating Airline.
     *
     * @return SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedFlightOperating
     */
    public function getOperating(): ?SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedFlightOperating
    {
        return $this->operating;
    }

    /**
     * Operating Airline.
     *
     * @param SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedFlightOperating $operating
     *
     * @return self
     */
    public function setOperating(?SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedFlightOperating $operating): self
    {
        $this->operating = $operating;

        return $this;
    }

    /**
     * Arrival date this segment.
     *
     * @return SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedFlightArrivalDate
     */
    public function getArrivalDate(): ?SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedFlightArrivalDate
    {
        return $this->arrivalDate;
    }

    /**
     * Arrival date this segment.
     *
     * @param SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedFlightArrivalDate $arrivalDate
     *
     * @return self
     */
    public function setArrivalDate(?SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedFlightArrivalDate $arrivalDate): self
    {
        $this->arrivalDate = $arrivalDate;

        return $this;
    }

    /**
     * Marketing Airline.
     *
     * @return SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedFlightMarketingItem[]
     */
    public function getMarketing(): ?array
    {
        return $this->marketing;
    }

    /**
     * Marketing Airline.
     *
     * @param SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedFlightMarketingItem[] $marketing
     *
     * @return self
     */
    public function setMarketing(?array $marketing): self
    {
        $this->marketing = $marketing;

        return $this;
    }
}
