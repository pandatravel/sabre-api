<?php

namespace Ammonkc\SabreApi\Model\OrderManagement;

use Ammonkc\SabreApi\AbstractModel;

class CarrierFlightInfo extends AbstractModel
{
    /**
     * The two-letter [IATA](https://www.iata.org/publications/Pages/code-search.aspx) airline code.
     *
     * @var string
     */
    protected $carrierCode;
    /**
     * Full name of the airline responsible for the passenger during the flight.
     *
     * @var string
     */
    protected $carrierName;
    /**
     * The unique identifier of the flight.
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
     * The two-letter [IATA](https://www.iata.org/publications/Pages/code-search.aspx) airline code.
     *
     * @return string
     */
    public function getCarrierCode(): ?string
    {
        return $this->carrierCode;
    }

    /**
     * The two-letter [IATA](https://www.iata.org/publications/Pages/code-search.aspx) airline code.
     *
     * @param string $carrierCode
     *
     * @return self
     */
    public function setCarrierCode(?string $carrierCode): self
    {
        $this->carrierCode = $carrierCode;

        return $this;
    }

    /**
     * Full name of the airline responsible for the passenger during the flight.
     *
     * @return string
     */
    public function getCarrierName(): ?string
    {
        return $this->carrierName;
    }

    /**
     * Full name of the airline responsible for the passenger during the flight.
     *
     * @param string $carrierName
     *
     * @return self
     */
    public function setCarrierName(?string $carrierName): self
    {
        $this->carrierName = $carrierName;

        return $this;
    }

    /**
     * The unique identifier of the flight.
     *
     * @return int
     */
    public function getFlightNumber(): ?int
    {
        return $this->flightNumber;
    }

    /**
     * The unique identifier of the flight.
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
