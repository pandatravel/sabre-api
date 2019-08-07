<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeTotalTravelTime extends AbstractModel
{
    /**
     * @var float
     */
    protected $max;
    /**
     * @var float
     */
    protected $min;

    /**
     * @return float
     */
    public function getMax(): ?float
    {
        return $this->max;
    }

    /**
     * @param float $max
     *
     * @return self
     */
    public function setMax(?float $max): self
    {
        $this->max = $max;

        return $this;
    }

    /**
     * @return float
     */
    public function getMin(): ?float
    {
        return $this->min;
    }

    /**
     * @param float $min
     *
     * @return self
     */
    public function setMin(?float $min): self
    {
        $this->min = $min;

        return $this;
    }
}
