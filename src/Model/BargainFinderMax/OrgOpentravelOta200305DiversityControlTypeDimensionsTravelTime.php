<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305DiversityControlTypeDimensionsTravelTime extends AbstractModel
{
    /**
     * @var float
     */
    protected $weight;

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     *
     * @return self
     */
    public function setWeight(float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }
}
