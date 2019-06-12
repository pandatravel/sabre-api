<?php

namespace Ammonkc\SabreApi\Model\OrderManagement;

use Ammonkc\SabreApi\AbstractModel;

class AirSegmentInformation extends AbstractModel
{
    /**
     * The three-letter [IATA](https://www.iata.org/publications/Pages/code-search.aspx) airport code of the departure airport.
     *
     * @var string
     */
    protected $departureAirport;
    /**
     * The three-letter [IATA](https://www.iata.org/publications/Pages/code-search.aspx) airport code of the arrival airport.
     *
     * @var string
     */
    protected $arrivalAirport;
    /**
     * The two-letter [IATA](https://www.iata.org/publications/Pages/code-search.aspx) airline code responsible for the passenger during the flight.
     *
     * @var string
     */
    protected $marketingAirlineCode;
    /**
     * The scheduled departure time.
     *
     * @var \DateTime
     */
    protected $departureTime;
    /**
     * The scheduled arrival time.
     *
     * @var \DateTime
     */
    protected $arrivalTime;
    /**
     * The flight number.
     *
     * @var int
     */
    protected $flightNumber;
    /**
     * The Reservation Booking Designator (RBD) code is used in reservation transactions to identify the booking class.
     *
     * @var string
     */
    protected $classOfService;

    /**
     * The three-letter [IATA](https://www.iata.org/publications/Pages/code-search.aspx) airport code of the departure airport.
     *
     * @return string
     */
    public function getDepartureAirport(): ?string
    {
        return $this->departureAirport;
    }

    /**
     * The three-letter [IATA](https://www.iata.org/publications/Pages/code-search.aspx) airport code of the departure airport.
     *
     * @param string $departureAirport
     *
     * @return self
     */
    public function setDepartureAirport(?string $departureAirport): self
    {
        $this->departureAirport = $departureAirport;

        return $this;
    }

    /**
     * The three-letter [IATA](https://www.iata.org/publications/Pages/code-search.aspx) airport code of the arrival airport.
     *
     * @return string
     */
    public function getArrivalAirport(): ?string
    {
        return $this->arrivalAirport;
    }

    /**
     * The three-letter [IATA](https://www.iata.org/publications/Pages/code-search.aspx) airport code of the arrival airport.
     *
     * @param string $arrivalAirport
     *
     * @return self
     */
    public function setArrivalAirport(?string $arrivalAirport): self
    {
        $this->arrivalAirport = $arrivalAirport;

        return $this;
    }

    /**
     * The two-letter [IATA](https://www.iata.org/publications/Pages/code-search.aspx) airline code responsible for the passenger during the flight.
     *
     * @return string
     */
    public function getMarketingAirlineCode(): ?string
    {
        return $this->marketingAirlineCode;
    }

    /**
     * The two-letter [IATA](https://www.iata.org/publications/Pages/code-search.aspx) airline code responsible for the passenger during the flight.
     *
     * @param string $marketingAirlineCode
     *
     * @return self
     */
    public function setMarketingAirlineCode(?string $marketingAirlineCode): self
    {
        $this->marketingAirlineCode = $marketingAirlineCode;

        return $this;
    }

    /**
     * The scheduled departure time.
     *
     * @return \DateTime
     */
    public function getDepartureTime(): ?\DateTime
    {
        return $this->departureTime;
    }

    /**
     * The scheduled departure time.
     *
     * @param \DateTime $departureTime
     *
     * @return self
     */
    public function setDepartureTime(?\DateTime $departureTime): self
    {
        $this->departureTime = $departureTime;

        return $this;
    }

    /**
     * The scheduled arrival time.
     *
     * @return \DateTime
     */
    public function getArrivalTime(): ?\DateTime
    {
        return $this->arrivalTime;
    }

    /**
     * The scheduled arrival time.
     *
     * @param \DateTime $arrivalTime
     *
     * @return self
     */
    public function setArrivalTime(?\DateTime $arrivalTime): self
    {
        $this->arrivalTime = $arrivalTime;

        return $this;
    }

    /**
     * The flight number.
     *
     * @return int
     */
    public function getFlightNumber(): ?int
    {
        return $this->flightNumber;
    }

    /**
     * The flight number.
     *
     * @param int $flightNumber
     *
     * @return self
     */
    public function setFlightNumber(?int $flightNumber): self
    {
        $this->flightNumber = $flightNumber;

        return $this;
    }

    /**
     * The Reservation Booking Designator (RBD) code is used in reservation transactions to identify the booking class.
     *
     * @return string
     */
    public function getClassOfService(): ?string
    {
        return $this->classOfService;
    }

    /**
     * The Reservation Booking Designator (RBD) code is used in reservation transactions to identify the booking class.
     *
     * @param string $classOfService
     *
     * @return self
     */
    public function setClassOfService(?string $classOfService): self
    {
        $this->classOfService = $classOfService;

        return $this;
    }
}
