<?php

namespace Ammonkc\SabreApi\Model\OrderManagement;

use Ammonkc\SabreApi\AbstractModel;

class Service extends AbstractModel
{
    /**
     * The unique identifier of the service.
     *
     * @var string
     */
    protected $id;
    /**
     * The unique identifier of an service in an external system.
     *
     * @var string
     */
    protected $externalId;
    /**
     * Status of the service instance.
     *
     * @var string
     */
    protected $statusCode;
    /**
     * The passenger's identifier in a data list.
     *
     * @var string
     */
    protected $passengerRefId;
    /**
     * References the Passenger Segment ID within a message.
     *
     * @var string
     */
    protected $segmentRefId;
    /**
     * Identifies the segment number in a PNR booked for the passenger and service.
     *
     * @var int
     */
    protected $pnrSegmentNumber;

    /**
     * The unique identifier of the service.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The unique identifier of the service.
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
     * The unique identifier of an service in an external system.
     *
     * @return string
     */
    public function getExternalId(): ?string
    {
        return $this->externalId;
    }

    /**
     * The unique identifier of an service in an external system.
     *
     * @param string $externalId
     *
     * @return self
     */
    public function setExternalId(?string $externalId): self
    {
        $this->externalId = $externalId;

        return $this;
    }

    /**
     * Status of the service instance.
     *
     * @return string
     */
    public function getStatusCode(): ?string
    {
        return $this->statusCode;
    }

    /**
     * Status of the service instance.
     *
     * @param string $statusCode
     *
     * @return self
     */
    public function setStatusCode(?string $statusCode): self
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    /**
     * The passenger's identifier in a data list.
     *
     * @return string
     */
    public function getPassengerRefId(): ?string
    {
        return $this->passengerRefId;
    }

    /**
     * The passenger's identifier in a data list.
     *
     * @param string $passengerRefId
     *
     * @return self
     */
    public function setPassengerRefId(?string $passengerRefId): self
    {
        $this->passengerRefId = $passengerRefId;

        return $this;
    }

    /**
     * References the Passenger Segment ID within a message.
     *
     * @return string
     */
    public function getSegmentRefId(): ?string
    {
        return $this->segmentRefId;
    }

    /**
     * References the Passenger Segment ID within a message.
     *
     * @param string $segmentRefId
     *
     * @return self
     */
    public function setSegmentRefId(?string $segmentRefId): self
    {
        $this->segmentRefId = $segmentRefId;

        return $this;
    }

    /**
     * Identifies the segment number in a PNR booked for the passenger and service.
     *
     * @return int
     */
    public function getPnrSegmentNumber(): ?int
    {
        return $this->pnrSegmentNumber;
    }

    /**
     * Identifies the segment number in a PNR booked for the passenger and service.
     *
     * @param int $pnrSegmentNumber
     *
     * @return self
     */
    public function setPnrSegmentNumber(?int $pnrSegmentNumber): self
    {
        $this->pnrSegmentNumber = $pnrSegmentNumber;

        return $this;
    }
}
