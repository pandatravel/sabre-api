<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class Carrier extends AbstractModel
{
    /**
     * Consider only these alliances.
     *
     * @var string
     */
    protected $alliances;
    /**
     * Basic Booking Request carrier.
     *
     * @var bool
     */
    protected $basicBookingRequest;
    /**
     * Call direct carrier.
     *
     * @var bool
     */
    protected $callDirect;
    /**
     * Code shared carrier.
     *
     * @var string
     */
    protected $codeShared;
    /**
     * Disclosure carrier.
     *
     * @var string
     */
    protected $disclosure;
    /**
     * @var Equipment
     */
    protected $equipment;
    /**
     * Equipment code.
     *
     * @var string
     */
    protected $marketing;
    /**
     * Marketing flight number.
     *
     * @var int
     */
    protected $marketingFlightNumber;
    /**
     * Operating carrier.
     *
     * @var string
     */
    protected $operating;
    /**
     * Operating flight number.
     *
     * @var int
     */
    protected $operatingFlightNumber;

    /**
     * Consider only these alliances.
     *
     * @return string
     */
    public function getAlliances(): ?string
    {
        return $this->alliances;
    }

    /**
     * Consider only these alliances.
     *
     * @param string $alliances
     *
     * @return self
     */
    public function setAlliances(?string $alliances): self
    {
        $this->alliances = $alliances;

        return $this;
    }

    /**
     * Basic Booking Request carrier.
     *
     * @return bool
     */
    public function getBasicBookingRequest(): ?bool
    {
        return $this->basicBookingRequest;
    }

    /**
     * Basic Booking Request carrier.
     *
     * @param bool $basicBookingRequest
     *
     * @return self
     */
    public function setBasicBookingRequest(?bool $basicBookingRequest): self
    {
        $this->basicBookingRequest = $basicBookingRequest;

        return $this;
    }

    /**
     * Call direct carrier.
     *
     * @return bool
     */
    public function getCallDirect(): ?bool
    {
        return $this->callDirect;
    }

    /**
     * Call direct carrier.
     *
     * @param bool $callDirect
     *
     * @return self
     */
    public function setCallDirect(?bool $callDirect): self
    {
        $this->callDirect = $callDirect;

        return $this;
    }

    /**
     * Code shared carrier.
     *
     * @return string
     */
    public function getCodeShared(): ?string
    {
        return $this->codeShared;
    }

    /**
     * Code shared carrier.
     *
     * @param string $codeShared
     *
     * @return self
     */
    public function setCodeShared(?string $codeShared): self
    {
        $this->codeShared = $codeShared;

        return $this;
    }

    /**
     * Disclosure carrier.
     *
     * @return string
     */
    public function getDisclosure(): ?string
    {
        return $this->disclosure;
    }

    /**
     * Disclosure carrier.
     *
     * @param string $disclosure
     *
     * @return self
     */
    public function setDisclosure(?string $disclosure): self
    {
        $this->disclosure = $disclosure;

        return $this;
    }

    /**
     * @return Equipment
     */
    public function getEquipment(): ?Equipment
    {
        return $this->equipment;
    }

    /**
     * @param Equipment $equipment
     *
     * @return self
     */
    public function setEquipment(?Equipment $equipment): self
    {
        $this->equipment = $equipment;

        return $this;
    }

    /**
     * Equipment code.
     *
     * @return string
     */
    public function getMarketing(): ?string
    {
        return $this->marketing;
    }

    /**
     * Equipment code.
     *
     * @param string $marketing
     *
     * @return self
     */
    public function setMarketing(?string $marketing): self
    {
        $this->marketing = $marketing;

        return $this;
    }

    /**
     * Marketing flight number.
     *
     * @return int
     */
    public function getMarketingFlightNumber(): ?int
    {
        return $this->marketingFlightNumber;
    }

    /**
     * Marketing flight number.
     *
     * @param int $marketingFlightNumber
     *
     * @return self
     */
    public function setMarketingFlightNumber(?int $marketingFlightNumber): self
    {
        $this->marketingFlightNumber = $marketingFlightNumber;

        return $this;
    }

    /**
     * Operating carrier.
     *
     * @return string
     */
    public function getOperating(): ?string
    {
        return $this->operating;
    }

    /**
     * Operating carrier.
     *
     * @param string $operating
     *
     * @return self
     */
    public function setOperating(?string $operating): self
    {
        $this->operating = $operating;

        return $this;
    }

    /**
     * Operating flight number.
     *
     * @return int
     */
    public function getOperatingFlightNumber(): ?int
    {
        return $this->operatingFlightNumber;
    }

    /**
     * Operating flight number.
     *
     * @param int $operatingFlightNumber
     *
     * @return self
     */
    public function setOperatingFlightNumber(?int $operatingFlightNumber): self
    {
        $this->operatingFlightNumber = $operatingFlightNumber;

        return $this;
    }
}
