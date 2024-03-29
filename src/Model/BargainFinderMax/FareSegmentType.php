<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class FareSegmentType extends AbstractModel
{
    /**
     * @var bool
     */
    protected $extraMileageAllowance;
    /**
     * @var SideTrip
     */
    protected $sideTrip;
    /**
     * @var bool
     */
    protected $stopover;
    /**
     * @var float
     */
    protected $stopoverCharge;
    /**
     * @var string
     */
    protected $stopoverChargeCurrency;
    /**
     * @var SurchargeType[]
     */
    protected $surcharges;
    /**
     * @var float
     */
    protected $transferCharge;

    /**
     * @return bool|null
     */
    public function getExtraMileageAllowance(): ?bool
    {
        return $this->extraMileageAllowance;
    }

    /**
     * @param bool|null $extraMileageAllowance
     *
     * @return self
     */
    public function setExtraMileageAllowance(?bool $extraMileageAllowance): self
    {
        $this->extraMileageAllowance = $extraMileageAllowance;

        return $this;
    }

    /**
     * @return SideTrip|null
     */
    public function getSideTrip(): ?SideTrip
    {
        return $this->sideTrip;
    }

    /**
     * @param SideTrip|null $sideTrip
     *
     * @return self
     */
    public function setSideTrip(?SideTrip $sideTrip): self
    {
        $this->sideTrip = $sideTrip;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getStopover(): ?bool
    {
        return $this->stopover;
    }

    /**
     * @param bool|null $stopover
     *
     * @return self
     */
    public function setStopover(?bool $stopover): self
    {
        $this->stopover = $stopover;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getStopoverCharge(): ?float
    {
        return $this->stopoverCharge;
    }

    /**
     * @param float|null $stopoverCharge
     *
     * @return self
     */
    public function setStopoverCharge(?float $stopoverCharge): self
    {
        $this->stopoverCharge = $stopoverCharge;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStopoverChargeCurrency(): ?string
    {
        return $this->stopoverChargeCurrency;
    }

    /**
     * @param string|null $stopoverChargeCurrency
     *
     * @return self
     */
    public function setStopoverChargeCurrency(?string $stopoverChargeCurrency): self
    {
        $this->stopoverChargeCurrency = $stopoverChargeCurrency;

        return $this;
    }

    /**
     * @return SurchargeType[]|null
     */
    public function getSurcharges(): ?array
    {
        return $this->surcharges;
    }

    /**
     * @param SurchargeType[]|null $surcharges
     *
     * @return self
     */
    public function setSurcharges(?array $surcharges): self
    {
        $this->surcharges = $surcharges;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getTransferCharge(): ?float
    {
        return $this->transferCharge;
    }

    /**
     * @param float|null $transferCharge
     *
     * @return self
     */
    public function setTransferCharge(?float $transferCharge): self
    {
        $this->transferCharge = $transferCharge;

        return $this;
    }
}
