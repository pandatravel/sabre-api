<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class HigherIntermediatePointType extends AbstractModel
{
    /**
     * @var float
     */
    protected $amount;
    /**
     * @var string
     */
    protected $cabinHigh;
    /**
     * @var string
     */
    protected $cabinLow;
    /**
     * @var string
     */
    protected $destination;
    /**
     * @var string
     */
    protected $fareClassHigh;
    /**
     * @var string
     */
    protected $fareClassLow;
    /**
     * @var string
     */
    protected $highDestination;
    /**
     * @var string
     */
    protected $highOrigin;
    /**
     * @var string
     */
    protected $lowDestination;
    /**
     * @var string
     */
    protected $lowOrigin;
    /**
     * @var int
     */
    protected $mileageSurchargePercentage;
    /**
     * @var string
     */
    protected $origin;

    /**
     * @return float
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     *
     * @return self
     */
    public function setAmount(?float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getCabinHigh(): ?string
    {
        return $this->cabinHigh;
    }

    /**
     * @param string $cabinHigh
     *
     * @return self
     */
    public function setCabinHigh(?string $cabinHigh): self
    {
        $this->cabinHigh = $cabinHigh;

        return $this;
    }

    /**
     * @return string
     */
    public function getCabinLow(): ?string
    {
        return $this->cabinLow;
    }

    /**
     * @param string $cabinLow
     *
     * @return self
     */
    public function setCabinLow(?string $cabinLow): self
    {
        $this->cabinLow = $cabinLow;

        return $this;
    }

    /**
     * @return string
     */
    public function getDestination(): ?string
    {
        return $this->destination;
    }

    /**
     * @param string $destination
     *
     * @return self
     */
    public function setDestination(?string $destination): self
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * @return string
     */
    public function getFareClassHigh(): ?string
    {
        return $this->fareClassHigh;
    }

    /**
     * @param string $fareClassHigh
     *
     * @return self
     */
    public function setFareClassHigh(?string $fareClassHigh): self
    {
        $this->fareClassHigh = $fareClassHigh;

        return $this;
    }

    /**
     * @return string
     */
    public function getFareClassLow(): ?string
    {
        return $this->fareClassLow;
    }

    /**
     * @param string $fareClassLow
     *
     * @return self
     */
    public function setFareClassLow(?string $fareClassLow): self
    {
        $this->fareClassLow = $fareClassLow;

        return $this;
    }

    /**
     * @return string
     */
    public function getHighDestination(): ?string
    {
        return $this->highDestination;
    }

    /**
     * @param string $highDestination
     *
     * @return self
     */
    public function setHighDestination(?string $highDestination): self
    {
        $this->highDestination = $highDestination;

        return $this;
    }

    /**
     * @return string
     */
    public function getHighOrigin(): ?string
    {
        return $this->highOrigin;
    }

    /**
     * @param string $highOrigin
     *
     * @return self
     */
    public function setHighOrigin(?string $highOrigin): self
    {
        $this->highOrigin = $highOrigin;

        return $this;
    }

    /**
     * @return string
     */
    public function getLowDestination(): ?string
    {
        return $this->lowDestination;
    }

    /**
     * @param string $lowDestination
     *
     * @return self
     */
    public function setLowDestination(?string $lowDestination): self
    {
        $this->lowDestination = $lowDestination;

        return $this;
    }

    /**
     * @return string
     */
    public function getLowOrigin(): ?string
    {
        return $this->lowOrigin;
    }

    /**
     * @param string $lowOrigin
     *
     * @return self
     */
    public function setLowOrigin(?string $lowOrigin): self
    {
        $this->lowOrigin = $lowOrigin;

        return $this;
    }

    /**
     * @return int
     */
    public function getMileageSurchargePercentage(): ?int
    {
        return $this->mileageSurchargePercentage;
    }

    /**
     * @param int $mileageSurchargePercentage
     *
     * @return self
     */
    public function setMileageSurchargePercentage(?int $mileageSurchargePercentage): self
    {
        $this->mileageSurchargePercentage = $mileageSurchargePercentage;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrigin(): ?string
    {
        return $this->origin;
    }

    /**
     * @param string $origin
     *
     * @return self
     */
    public function setOrigin(?string $origin): self
    {
        $this->origin = $origin;

        return $this;
    }
}
