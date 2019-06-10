<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305PriceAdjustmentTypeEquivFare extends AbstractModel
{
    /**
     * @var float
     */
    protected $amount;
    /**
     * @var float
     */
    protected $effectivePriceDeviation;

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
     * @return float
     */
    public function getEffectivePriceDeviation(): ?float
    {
        return $this->effectivePriceDeviation;
    }

    /**
     * @param float $effectivePriceDeviation
     *
     * @return self
     */
    public function setEffectivePriceDeviation(?float $effectivePriceDeviation): self
    {
        $this->effectivePriceDeviation = $effectivePriceDeviation;

        return $this;
    }
}
