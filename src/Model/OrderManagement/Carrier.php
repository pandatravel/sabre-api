<?php

namespace Ammonkc\SabreApi\Model\OrderManagement;

use Ammonkc\SabreApi\AbstractModel;

class Carrier extends AbstractModel
{
    /**
     * The two-letter [IATA](https://www.iata.org/publications/Pages/code-search.aspx) airline code.
     *
     * @var string
     */
    protected $airlineCode;
    /**
     * The number assigned to the flight.
     *
     * @var string
     */
    protected $flightNumber;
    /**
     * The Reservation Booking Designator (RBD) code is used in reservation transactions to identify the booking class.
     *
     * @var string
     */
    protected $bookingClass;
    /**
     * The commercial name of the carrier.
     *
     * @var string
     */
    protected $name;
    /**
     * The airline carrier's banner name.
     *
     * @var string
     */
    protected $banner;

    /**
     * The two-letter [IATA](https://www.iata.org/publications/Pages/code-search.aspx) airline code.
     *
     * @return string
     */
    public function getAirlineCode(): ?string
    {
        return $this->airlineCode;
    }

    /**
     * The two-letter [IATA](https://www.iata.org/publications/Pages/code-search.aspx) airline code.
     *
     * @param string $airlineCode
     *
     * @return self
     */
    public function setAirlineCode(?string $airlineCode): self
    {
        $this->airlineCode = $airlineCode;

        return $this;
    }

    /**
     * The number assigned to the flight.
     *
     * @return string
     */
    public function getFlightNumber(): ?string
    {
        return $this->flightNumber;
    }

    /**
     * The number assigned to the flight.
     *
     * @param string $flightNumber
     *
     * @return self
     */
    public function setFlightNumber(?string $flightNumber): self
    {
        $this->flightNumber = $flightNumber;

        return $this;
    }

    /**
     * The Reservation Booking Designator (RBD) code is used in reservation transactions to identify the booking class.
     *
     * @return string
     */
    public function getBookingClass(): ?string
    {
        return $this->bookingClass;
    }

    /**
     * The Reservation Booking Designator (RBD) code is used in reservation transactions to identify the booking class.
     *
     * @param string $bookingClass
     *
     * @return self
     */
    public function setBookingClass(?string $bookingClass): self
    {
        $this->bookingClass = $bookingClass;

        return $this;
    }

    /**
     * The commercial name of the carrier.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The commercial name of the carrier.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * The airline carrier's banner name.
     *
     * @return string
     */
    public function getBanner(): ?string
    {
        return $this->banner;
    }

    /**
     * The airline carrier's banner name.
     *
     * @param string $banner
     *
     * @return self
     */
    public function setBanner(?string $banner): self
    {
        $this->banner = $banner;

        return $this;
    }
}
