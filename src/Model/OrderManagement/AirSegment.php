<?php

namespace Ammonkc\SabreApi\Model\OrderManagement;

use Ammonkc\SabreApi\AbstractModel;

class AirSegment extends AbstractModel
{
    /**
     * Contains airline carrier information.
     *
     * @var Carrier
     */
    protected $operatingCarrier;
    /**
     * Contains airline carrier information.
     *
     * @var Carrier
     */
    protected $marketingCarrier;
    /**
     * The scheduled date and time of departure.
     *
     * @var \DateTime
     */
    protected $departureDateTime;
    /**
     * The scheduled date and time of arrival.
     *
     * @var \DateTime
     */
    protected $arrivalDateTime;
    /**
     * The three-letter [IATA](https://www.iata.org/publications/Pages/code-search.aspx) departure airport code.
     *
     * @var string
     */
    protected $departureAirport;
    /**
     * The three-letter [IATA](https://www.iata.org/publications/Pages/code-search.aspx) arrival airport code.
     *
     * @var string
     */
    protected $arrivalAirport;
    /**
     * @var Leg[]
     */
    protected $legs;
    /**
     * Action code.
     *
     * @var string
     */
    protected $actionCode;

    /**
     * Contains airline carrier information.
     *
     * @return Carrier
     */
    public function getOperatingCarrier(): ?Carrier
    {
        return $this->operatingCarrier;
    }

    /**
     * Contains airline carrier information.
     *
     * @param Carrier $operatingCarrier
     *
     * @return self
     */
    public function setOperatingCarrier(?Carrier $operatingCarrier): self
    {
        $this->operatingCarrier = $operatingCarrier;

        return $this;
    }

    /**
     * Contains airline carrier information.
     *
     * @return Carrier
     */
    public function getMarketingCarrier(): ?Carrier
    {
        return $this->marketingCarrier;
    }

    /**
     * Contains airline carrier information.
     *
     * @param Carrier $marketingCarrier
     *
     * @return self
     */
    public function setMarketingCarrier(?Carrier $marketingCarrier): self
    {
        $this->marketingCarrier = $marketingCarrier;

        return $this;
    }

    /**
     * The scheduled date and time of departure.
     *
     * @return \DateTime
     */
    public function getDepartureDateTime(): ?\DateTime
    {
        return $this->departureDateTime;
    }

    /**
     * The scheduled date and time of departure.
     *
     * @param \DateTime $departureDateTime
     *
     * @return self
     */
    public function setDepartureDateTime(?\DateTime $departureDateTime): self
    {
        $this->departureDateTime = $departureDateTime;

        return $this;
    }

    /**
     * The scheduled date and time of arrival.
     *
     * @return \DateTime
     */
    public function getArrivalDateTime(): ?\DateTime
    {
        return $this->arrivalDateTime;
    }

    /**
     * The scheduled date and time of arrival.
     *
     * @param \DateTime $arrivalDateTime
     *
     * @return self
     */
    public function setArrivalDateTime(?\DateTime $arrivalDateTime): self
    {
        $this->arrivalDateTime = $arrivalDateTime;

        return $this;
    }

    /**
     * The three-letter [IATA](https://www.iata.org/publications/Pages/code-search.aspx) departure airport code.
     *
     * @return string
     */
    public function getDepartureAirport(): ?string
    {
        return $this->departureAirport;
    }

    /**
     * The three-letter [IATA](https://www.iata.org/publications/Pages/code-search.aspx) departure airport code.
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
     * The three-letter [IATA](https://www.iata.org/publications/Pages/code-search.aspx) arrival airport code.
     *
     * @return string
     */
    public function getArrivalAirport(): ?string
    {
        return $this->arrivalAirport;
    }

    /**
     * The three-letter [IATA](https://www.iata.org/publications/Pages/code-search.aspx) arrival airport code.
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
     * @return Leg[]
     */
    public function getLegs(): ?array
    {
        return $this->legs;
    }

    /**
     * @param Leg[] $legs
     *
     * @return self
     */
    public function setLegs(?array $legs): self
    {
        $this->legs = $legs;

        return $this;
    }

    /**
     * Action code.
     *
     * @return string
     */
    public function getActionCode(): ?string
    {
        return $this->actionCode;
    }

    /**
     * Action code.
     *
     * @param string $actionCode
     *
     * @return self
     */
    public function setActionCode(?string $actionCode): self
    {
        $this->actionCode = $actionCode;

        return $this;
    }
}
