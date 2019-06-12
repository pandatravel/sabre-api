<?php

namespace Ammonkc\SabreApi\Model\OrderManagement;

use Ammonkc\SabreApi\AbstractModel;

class Segment extends AbstractModel
{
    /**
     * Uniquely identifies a passenger segment within the content of a message.
     *
     * @var string
     */
    protected $id;
    /**
     * @var ExternalReference[]
     */
    protected $references;
    /**
     * When true, indicates an ARNK (Arrival Unknown) condition. This is a gap between a current segment departure and previous segment arrival location, implying unknown passenger movement.
     *
     * @var bool
     */
    protected $arnkInd;
    /**
     * The single-letter cabin code. Can be one of Y, S, C, J, F, P.
     *
     * @var string
     */
    protected $cabinTypeCode;
    /**
     * Contains location, terminal, gate, and time information.
     *
     * @var Transport
     */
    protected $departure;
    /**
     * Contains location, terminal, gate, and time information.
     *
     * @var Transport
     */
    protected $arrival;
    /**
     * @var CarrierFlightInfo
     */
    protected $marketingCarrier;
    /**
     * @var CarrierFlightInfo
     */
    protected $operatingCarrier;

    /**
     * Uniquely identifies a passenger segment within the content of a message.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Uniquely identifies a passenger segment within the content of a message.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return ExternalReference[]
     */
    public function getReferences(): ?array
    {
        return $this->references;
    }

    /**
     * @param ExternalReference[] $references
     *
     * @return self
     */
    public function setReferences(?array $references): self
    {
        $this->references = $references;

        return $this;
    }

    /**
     * When true, indicates an ARNK (Arrival Unknown) condition. This is a gap between a current segment departure and previous segment arrival location, implying unknown passenger movement.
     *
     * @return bool
     */
    public function getArnkInd(): ?bool
    {
        return $this->arnkInd;
    }

    /**
     * When true, indicates an ARNK (Arrival Unknown) condition. This is a gap between a current segment departure and previous segment arrival location, implying unknown passenger movement.
     *
     * @param bool $arnkInd
     *
     * @return self
     */
    public function setArnkInd(?bool $arnkInd): self
    {
        $this->arnkInd = $arnkInd;

        return $this;
    }

    /**
     * The single-letter cabin code. Can be one of Y, S, C, J, F, P.
     *
     * @return string
     */
    public function getCabinTypeCode(): ?string
    {
        return $this->cabinTypeCode;
    }

    /**
     * The single-letter cabin code. Can be one of Y, S, C, J, F, P.
     *
     * @param string $cabinTypeCode
     *
     * @return self
     */
    public function setCabinTypeCode(?string $cabinTypeCode): self
    {
        $this->cabinTypeCode = $cabinTypeCode;

        return $this;
    }

    /**
     * Contains location, terminal, gate, and time information.
     *
     * @return Transport
     */
    public function getDeparture(): ?Transport
    {
        return $this->departure;
    }

    /**
     * Contains location, terminal, gate, and time information.
     *
     * @param Transport $departure
     *
     * @return self
     */
    public function setDeparture(?Transport $departure): self
    {
        $this->departure = $departure;

        return $this;
    }

    /**
     * Contains location, terminal, gate, and time information.
     *
     * @return Transport
     */
    public function getArrival(): ?Transport
    {
        return $this->arrival;
    }

    /**
     * Contains location, terminal, gate, and time information.
     *
     * @param Transport $arrival
     *
     * @return self
     */
    public function setArrival(?Transport $arrival): self
    {
        $this->arrival = $arrival;

        return $this;
    }

    /**
     * @return CarrierFlightInfo
     */
    public function getMarketingCarrier(): ?CarrierFlightInfo
    {
        return $this->marketingCarrier;
    }

    /**
     * @param CarrierFlightInfo $marketingCarrier
     *
     * @return self
     */
    public function setMarketingCarrier(?CarrierFlightInfo $marketingCarrier): self
    {
        $this->marketingCarrier = $marketingCarrier;

        return $this;
    }

    /**
     * @return CarrierFlightInfo
     */
    public function getOperatingCarrier(): ?CarrierFlightInfo
    {
        return $this->operatingCarrier;
    }

    /**
     * @param CarrierFlightInfo $operatingCarrier
     *
     * @return self
     */
    public function setOperatingCarrier(?CarrierFlightInfo $operatingCarrier): self
    {
        $this->operatingCarrier = $operatingCarrier;

        return $this;
    }
}
