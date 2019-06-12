<?php

namespace Ammonkc\SabreApi\Model\OrderManagement;

use Ammonkc\SabreApi\AbstractModel;

class Transport extends AbstractModel
{
    /**
     * Identifier of the airport gate.
     *
     * @var string
     */
    protected $gateId;
    /**
     * The three-letter [IATA](https://www.iata.org/publications/Pages/code-search.aspx) city or airport code.
     *
     * @var string
     */
    protected $locationCode;
    /**
     * The formal name of the airport.
     *
     * @var string
     */
    protected $stationName;
    /**
     * The name of the airport terminal.
     *
     * @var string
     */
    protected $terminalName;
    /**
     * The Scheduled date and time of the aircraft at the terminal or gate at an airport.
     *
     * @var \DateTime
     */
    protected $scheduledDateTime;

    /**
     * Identifier of the airport gate.
     *
     * @return string
     */
    public function getGateId(): ?string
    {
        return $this->gateId;
    }

    /**
     * Identifier of the airport gate.
     *
     * @param string $gateId
     *
     * @return self
     */
    public function setGateId(?string $gateId): self
    {
        $this->gateId = $gateId;

        return $this;
    }

    /**
     * The three-letter [IATA](https://www.iata.org/publications/Pages/code-search.aspx) city or airport code.
     *
     * @return string
     */
    public function getLocationCode(): ?string
    {
        return $this->locationCode;
    }

    /**
     * The three-letter [IATA](https://www.iata.org/publications/Pages/code-search.aspx) city or airport code.
     *
     * @param string $locationCode
     *
     * @return self
     */
    public function setLocationCode(?string $locationCode): self
    {
        $this->locationCode = $locationCode;

        return $this;
    }

    /**
     * The formal name of the airport.
     *
     * @return string
     */
    public function getStationName(): ?string
    {
        return $this->stationName;
    }

    /**
     * The formal name of the airport.
     *
     * @param string $stationName
     *
     * @return self
     */
    public function setStationName(?string $stationName): self
    {
        $this->stationName = $stationName;

        return $this;
    }

    /**
     * The name of the airport terminal.
     *
     * @return string
     */
    public function getTerminalName(): ?string
    {
        return $this->terminalName;
    }

    /**
     * The name of the airport terminal.
     *
     * @param string $terminalName
     *
     * @return self
     */
    public function setTerminalName(?string $terminalName): self
    {
        $this->terminalName = $terminalName;

        return $this;
    }

    /**
     * The Scheduled date and time of the aircraft at the terminal or gate at an airport.
     *
     * @return \DateTime
     */
    public function getScheduledDateTime(): ?\DateTime
    {
        return $this->scheduledDateTime;
    }

    /**
     * The Scheduled date and time of the aircraft at the terminal or gate at an airport.
     *
     * @param \DateTime $scheduledDateTime
     *
     * @return self
     */
    public function setScheduledDateTime(?\DateTime $scheduledDateTime): self
    {
        $this->scheduledDateTime = $scheduledDateTime;

        return $this;
    }
}
