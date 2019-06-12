<?php

namespace Ammonkc\SabreApi\Model\OrderManagement;

use Ammonkc\SabreApi\AbstractModel;

class ExternalOrder extends AbstractModel
{
    /**
     * The unique identifier of the order within the Sabre system.
     *
     * @var string
     */
    protected $id;
    /**
     * The unique identifier of the external system being used (e.g. carrier code).
     *
     * @var string
     */
    protected $systemId;
    /**
     * The unique identifier of the order in the external system.
     *
     * @var string
     */
    protected $externalOrderId;
    /**
     * The date and time the external order was created.
     *
     * @var string
     */
    protected $externalOrderCreateDateTime;
    /**
     * @var BookingReference[]
     */
    protected $bookingReferences;
    /**
     * Contains the amount of money expected, required, or given in payment.
     *
     * @var Price
     */
    protected $totalPrice;
    /**
     * @var AirSegmentInformation[]
     */
    protected $airSegmentInformations;

    /**
     * The unique identifier of the order within the Sabre system.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The unique identifier of the order within the Sabre system.
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
     * The unique identifier of the external system being used (e.g. carrier code).
     *
     * @return string
     */
    public function getSystemId(): ?string
    {
        return $this->systemId;
    }

    /**
     * The unique identifier of the external system being used (e.g. carrier code).
     *
     * @param string $systemId
     *
     * @return self
     */
    public function setSystemId(?string $systemId): self
    {
        $this->systemId = $systemId;

        return $this;
    }

    /**
     * The unique identifier of the order in the external system.
     *
     * @return string
     */
    public function getExternalOrderId(): ?string
    {
        return $this->externalOrderId;
    }

    /**
     * The unique identifier of the order in the external system.
     *
     * @param string $externalOrderId
     *
     * @return self
     */
    public function setExternalOrderId(?string $externalOrderId): self
    {
        $this->externalOrderId = $externalOrderId;

        return $this;
    }

    /**
     * The date and time the external order was created.
     *
     * @return string
     */
    public function getExternalOrderCreateDateTime(): ?string
    {
        return $this->externalOrderCreateDateTime;
    }

    /**
     * The date and time the external order was created.
     *
     * @param string $externalOrderCreateDateTime
     *
     * @return self
     */
    public function setExternalOrderCreateDateTime(?string $externalOrderCreateDateTime): self
    {
        $this->externalOrderCreateDateTime = $externalOrderCreateDateTime;

        return $this;
    }

    /**
     * @return BookingReference[]
     */
    public function getBookingReferences(): ?array
    {
        return $this->bookingReferences;
    }

    /**
     * @param BookingReference[] $bookingReferences
     *
     * @return self
     */
    public function setBookingReferences(?array $bookingReferences): self
    {
        $this->bookingReferences = $bookingReferences;

        return $this;
    }

    /**
     * Contains the amount of money expected, required, or given in payment.
     *
     * @return Price
     */
    public function getTotalPrice(): ?Price
    {
        return $this->totalPrice;
    }

    /**
     * Contains the amount of money expected, required, or given in payment.
     *
     * @param Price $totalPrice
     *
     * @return self
     */
    public function setTotalPrice(?Price $totalPrice): self
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
     * @return AirSegmentInformation[]
     */
    public function getAirSegmentInformations(): ?array
    {
        return $this->airSegmentInformations;
    }

    /**
     * @param AirSegmentInformation[] $airSegmentInformations
     *
     * @return self
     */
    public function setAirSegmentInformations(?array $airSegmentInformations): self
    {
        $this->airSegmentInformations = $airSegmentInformations;

        return $this;
    }
}
