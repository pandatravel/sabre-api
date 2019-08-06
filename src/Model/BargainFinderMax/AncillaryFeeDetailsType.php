<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class AncillaryFeeDetailsType extends AbstractModel
{
    /**
     * @var float
     */
    protected $amount;
    /**
     * @var string
     */
    protected $ancillaryTypeCode;
    /**
     * @var int
     */
    protected $baggageId;
    /**
     * @var string
     */
    protected $carrier;
    /**
     * @var string
     */
    protected $code;
    /**
     * @var string
     */
    protected $departureDate;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $destination;
    /**
     * @var int
     */
    protected $endSegment;
    /**
     * @var string
     */
    protected $origin;
    /**
     * @var int
     */
    protected $startSegment;
    /**
     * @var string
     */
    protected $subcode;

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     *
     * @return self
     */
    public function setAmount(float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getAncillaryTypeCode(): string
    {
        return $this->ancillaryTypeCode;
    }

    /**
     * @param string $ancillaryTypeCode
     *
     * @return self
     */
    public function setAncillaryTypeCode(string $ancillaryTypeCode): self
    {
        $this->ancillaryTypeCode = $ancillaryTypeCode;

        return $this;
    }

    /**
     * @return int
     */
    public function getBaggageId(): int
    {
        return $this->baggageId;
    }

    /**
     * @param int $baggageId
     *
     * @return self
     */
    public function setBaggageId(int $baggageId): self
    {
        $this->baggageId = $baggageId;

        return $this;
    }

    /**
     * @return string
     */
    public function getCarrier(): string
    {
        return $this->carrier;
    }

    /**
     * @param string $carrier
     *
     * @return self
     */
    public function setCarrier(string $carrier): self
    {
        $this->carrier = $carrier;

        return $this;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return string
     */
    public function getDepartureDate(): string
    {
        return $this->departureDate;
    }

    /**
     * @param string $departureDate
     *
     * @return self
     */
    public function setDepartureDate(string $departureDate): self
    {
        $this->departureDate = $departureDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getDestination(): string
    {
        return $this->destination;
    }

    /**
     * @param string $destination
     *
     * @return self
     */
    public function setDestination(string $destination): self
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * @return int
     */
    public function getEndSegment(): int
    {
        return $this->endSegment;
    }

    /**
     * @param int $endSegment
     *
     * @return self
     */
    public function setEndSegment(int $endSegment): self
    {
        $this->endSegment = $endSegment;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrigin(): string
    {
        return $this->origin;
    }

    /**
     * @param string $origin
     *
     * @return self
     */
    public function setOrigin(string $origin): self
    {
        $this->origin = $origin;

        return $this;
    }

    /**
     * @return int
     */
    public function getStartSegment(): int
    {
        return $this->startSegment;
    }

    /**
     * @param int $startSegment
     *
     * @return self
     */
    public function setStartSegment(int $startSegment): self
    {
        $this->startSegment = $startSegment;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubcode(): string
    {
        return $this->subcode;
    }

    /**
     * @param string $subcode
     *
     * @return self
     */
    public function setSubcode(string $subcode): self
    {
        $this->subcode = $subcode;

        return $this;
    }
}
