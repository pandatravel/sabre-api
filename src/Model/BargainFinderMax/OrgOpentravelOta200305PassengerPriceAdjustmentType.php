<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305PassengerPriceAdjustmentType extends AbstractModel
{
    /**
     * @var OrgOpentravelOta200305PriceAdjustmentTypeBaseFare
     */
    protected $baseFare;
    /**
     * @var OrgOpentravelOta200305PriceAdjustmentTypeEquivFare
     */
    protected $equivFare;
    /**
     * @var float
     */
    protected $passengerID;
    /**
     * @var OrgOpentravelOta200305PriceAdjustmentTypeTotalFare
     */
    protected $totalFare;
    /**
     * @var OrgOpentravelOta200305PriceAdjustmentTypeTotalTax
     */
    protected $totalTax;

    /**
     * @return OrgOpentravelOta200305PriceAdjustmentTypeBaseFare
     */
    public function getBaseFare(): ?OrgOpentravelOta200305PriceAdjustmentTypeBaseFare
    {
        return $this->baseFare;
    }

    /**
     * @param OrgOpentravelOta200305PriceAdjustmentTypeBaseFare $baseFare
     *
     * @return self
     */
    public function setBaseFare(?OrgOpentravelOta200305PriceAdjustmentTypeBaseFare $baseFare): self
    {
        $this->baseFare = $baseFare;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305PriceAdjustmentTypeEquivFare
     */
    public function getEquivFare(): ?OrgOpentravelOta200305PriceAdjustmentTypeEquivFare
    {
        return $this->equivFare;
    }

    /**
     * @param OrgOpentravelOta200305PriceAdjustmentTypeEquivFare $equivFare
     *
     * @return self
     */
    public function setEquivFare(?OrgOpentravelOta200305PriceAdjustmentTypeEquivFare $equivFare): self
    {
        $this->equivFare = $equivFare;

        return $this;
    }

    /**
     * @return float
     */
    public function getPassengerID(): ?float
    {
        return $this->passengerID;
    }

    /**
     * @param float $passengerID
     *
     * @return self
     */
    public function setPassengerID(?float $passengerID): self
    {
        $this->passengerID = $passengerID;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305PriceAdjustmentTypeTotalFare
     */
    public function getTotalFare(): ?OrgOpentravelOta200305PriceAdjustmentTypeTotalFare
    {
        return $this->totalFare;
    }

    /**
     * @param OrgOpentravelOta200305PriceAdjustmentTypeTotalFare $totalFare
     *
     * @return self
     */
    public function setTotalFare(?OrgOpentravelOta200305PriceAdjustmentTypeTotalFare $totalFare): self
    {
        $this->totalFare = $totalFare;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305PriceAdjustmentTypeTotalTax
     */
    public function getTotalTax(): ?OrgOpentravelOta200305PriceAdjustmentTypeTotalTax
    {
        return $this->totalTax;
    }

    /**
     * @param OrgOpentravelOta200305PriceAdjustmentTypeTotalTax $totalTax
     *
     * @return self
     */
    public function setTotalTax(?OrgOpentravelOta200305PriceAdjustmentTypeTotalTax $totalTax): self
    {
        $this->totalTax = $totalTax;

        return $this;
    }
}
