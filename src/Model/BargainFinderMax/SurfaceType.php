<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class SurfaceType extends AbstractModel
{
    /**
     * Extra mileage allowance.
     *
     * @var bool
     */
    protected $extraMileageAllowance;
    /**
     * Stopover segment.
     *
     * @var bool
     */
    protected $stopover;
    /**
     * Stopover Charge.
     *
     * @var float
     */
    protected $stopoverCharge;
    /**
     * Stopover Charge Currency.
     *
     * @var string
     */
    protected $stopoverChargeCurrency;
    /**
     * Unchargeable.
     *
     * @var bool
     */
    protected $unchargeable;

    /**
     * Extra mileage allowance.
     *
     * @return bool
     */
    public function getExtraMileageAllowance(): bool
    {
        return $this->extraMileageAllowance;
    }

    /**
     * Extra mileage allowance.
     *
     * @param bool $extraMileageAllowance
     *
     * @return self
     */
    public function setExtraMileageAllowance(bool $extraMileageAllowance): self
    {
        $this->extraMileageAllowance = $extraMileageAllowance;

        return $this;
    }

    /**
     * Stopover segment.
     *
     * @return bool
     */
    public function getStopover(): bool
    {
        return $this->stopover;
    }

    /**
     * Stopover segment.
     *
     * @param bool $stopover
     *
     * @return self
     */
    public function setStopover(bool $stopover): self
    {
        $this->stopover = $stopover;

        return $this;
    }

    /**
     * Stopover Charge.
     *
     * @return float
     */
    public function getStopoverCharge(): float
    {
        return $this->stopoverCharge;
    }

    /**
     * Stopover Charge.
     *
     * @param float $stopoverCharge
     *
     * @return self
     */
    public function setStopoverCharge(float $stopoverCharge): self
    {
        $this->stopoverCharge = $stopoverCharge;

        return $this;
    }

    /**
     * Stopover Charge Currency.
     *
     * @return string
     */
    public function getStopoverChargeCurrency(): string
    {
        return $this->stopoverChargeCurrency;
    }

    /**
     * Stopover Charge Currency.
     *
     * @param string $stopoverChargeCurrency
     *
     * @return self
     */
    public function setStopoverChargeCurrency(string $stopoverChargeCurrency): self
    {
        $this->stopoverChargeCurrency = $stopoverChargeCurrency;

        return $this;
    }

    /**
     * Unchargeable.
     *
     * @return bool
     */
    public function getUnchargeable(): bool
    {
        return $this->unchargeable;
    }

    /**
     * Unchargeable.
     *
     * @param bool $unchargeable
     *
     * @return self
     */
    public function setUnchargeable(bool $unchargeable): self
    {
        $this->unchargeable = $unchargeable;

        return $this;
    }
}
