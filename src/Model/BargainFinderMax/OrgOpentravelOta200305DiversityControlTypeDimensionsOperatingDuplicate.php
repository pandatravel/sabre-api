<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305DiversityControlTypeDimensionsOperatingDuplicate extends AbstractModel
{
    /**
     * @var OrgOpentravelOta200305DiversityControlTypeDimensionsOperatingDuplicatePreferredCarrier[]
     */
    protected $preferredCarrier;
    /**
     * @var float
     */
    protected $weight;

    /**
     * @return OrgOpentravelOta200305DiversityControlTypeDimensionsOperatingDuplicatePreferredCarrier[]
     */
    public function getPreferredCarrier(): ?array
    {
        return $this->preferredCarrier;
    }

    /**
     * @param OrgOpentravelOta200305DiversityControlTypeDimensionsOperatingDuplicatePreferredCarrier[] $preferredCarrier
     *
     * @return self
     */
    public function setPreferredCarrier(?array $preferredCarrier): self
    {
        $this->preferredCarrier = $preferredCarrier;

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
