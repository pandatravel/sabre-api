<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

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
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * @param float|null $amount
     *
     * @return self
     */
    public function setAmount(?float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAncillaryTypeCode(): ?string
    {
        return $this->ancillaryTypeCode;
    }

    /**
     * @param string|null $ancillaryTypeCode
     *
     * @return self
     */
    public function setAncillaryTypeCode(?string $ancillaryTypeCode): self
    {
        $this->ancillaryTypeCode = $ancillaryTypeCode;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getBaggageId(): ?int
    {
        return $this->baggageId;
    }

    /**
     * @param int|null $baggageId
     *
     * @return self
     */
    public function setBaggageId(?int $baggageId): self
    {
        $this->baggageId = $baggageId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCarrier(): ?string
    {
        return $this->carrier;
    }

    /**
     * @param string|null $carrier
     *
     * @return self
     */
    public function setCarrier(?string $carrier): self
    {
        $this->carrier = $carrier;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDepartureDate(): ?string
    {
        return $this->departureDate;
    }

    /**
     * @param string|null $departureDate
     *
     * @return self
     */
    public function setDepartureDate(?string $departureDate): self
    {
        $this->departureDate = $departureDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDestination(): ?string
    {
        return $this->destination;
    }

    /**
     * @param string|null $destination
     *
     * @return self
     */
    public function setDestination(?string $destination): self
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getEndSegment(): ?int
    {
        return $this->endSegment;
    }

    /**
     * @param int|null $endSegment
     *
     * @return self
     */
    public function setEndSegment(?int $endSegment): self
    {
        $this->endSegment = $endSegment;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getOrigin(): ?string
    {
        return $this->origin;
    }

    /**
     * @param string|null $origin
     *
     * @return self
     */
    public function setOrigin(?string $origin): self
    {
        $this->origin = $origin;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getStartSegment(): ?int
    {
        return $this->startSegment;
    }

    /**
     * @param int|null $startSegment
     *
     * @return self
     */
    public function setStartSegment(?int $startSegment): self
    {
        $this->startSegment = $startSegment;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSubcode(): ?string
    {
        return $this->subcode;
    }

    /**
     * @param string|null $subcode
     *
     * @return self
     */
    public function setSubcode(?string $subcode): self
    {
        $this->subcode = $subcode;

        return $this;
    }
}
