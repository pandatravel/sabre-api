<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

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
     * @return OrgOpentravelOta200305DiversityControlTypeDimensionsTimeOfDayDistribution[]|null
     */
    public function getDistribution(): ?array
    {
        return $this->distribution;
    }

    /**
     * @param OrgOpentravelOta200305DiversityControlTypeDimensionsTimeOfDayDistribution[]|null $distribution
     *
     * @return self
     */
    public function setDistribution(?array $distribution): self
    {
        $this->distribution = $distribution;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getWeight(): ?float
    {
        return $this->weight;
    }

    /**
     * @param float|null $weight
     *
     * @return self
     */
    public function setWeight(?float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }
}
