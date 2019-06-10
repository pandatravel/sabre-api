<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305DiversityControlTypeDimensionsTimeOfDay extends AbstractModel
{
    /**
     * @var OrgOpentravelOta200305DiversityControlTypeDimensionsTimeOfDayDistribution[]
     */
    protected $distribution;
    /**
     * @var float
     */
    protected $weight;

    /**
     * @return OrgOpentravelOta200305DiversityControlTypeDimensionsTimeOfDayDistribution[]
     */
    public function getDistribution(): ?array
    {
        return $this->distribution;
    }

    /**
     * @param OrgOpentravelOta200305DiversityControlTypeDimensionsTimeOfDayDistribution[] $distribution
     *
     * @return self
     */
    public function setDistribution(?array $distribution): self
    {
        $this->distribution = $distribution;

        return $this;
    }

    /**
     * @return float
     */
    public function getWeight(): ?float
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     *
     * @return self
     */
    public function setWeight(?float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }
}
