<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305DiversityControlTypeDimensionsInboundOutboundPairing extends AbstractModel
{
    /**
     * @var int
     */
    protected $duplicates;
    /**
     * @var float
     */
    protected $weight;

    /**
     * @return int
     */
    public function getDuplicates(): ?int
    {
        return $this->duplicates;
    }

    /**
     * @param int $duplicates
     *
     * @return self
     */
    public function setDuplicates(?int $duplicates): self
    {
        $this->duplicates = $duplicates;

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
