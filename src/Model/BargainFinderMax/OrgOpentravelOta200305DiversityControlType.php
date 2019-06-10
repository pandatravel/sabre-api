<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305DiversityControlType extends AbstractModel
{
    /**
     * @var OrgOpentravelOta200305DiversityControlTypeDimensions
     */
    protected $dimensions;
    /**
     * @var OrgOpentravelOta200305DiversityControlTypeLowFareBucket
     */
    protected $lowFareBucket;

    /**
     * @return OrgOpentravelOta200305DiversityControlTypeDimensions
     */
    public function getDimensions(): ?OrgOpentravelOta200305DiversityControlTypeDimensions
    {
        return $this->dimensions;
    }

    /**
     * @param OrgOpentravelOta200305DiversityControlTypeDimensions $dimensions
     *
     * @return self
     */
    public function setDimensions(?OrgOpentravelOta200305DiversityControlTypeDimensions $dimensions): self
    {
        $this->dimensions = $dimensions;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305DiversityControlTypeLowFareBucket
     */
    public function getLowFareBucket(): ?OrgOpentravelOta200305DiversityControlTypeLowFareBucket
    {
        return $this->lowFareBucket;
    }

    /**
     * @param OrgOpentravelOta200305DiversityControlTypeLowFareBucket $lowFareBucket
     *
     * @return self
     */
    public function setLowFareBucket(?OrgOpentravelOta200305DiversityControlTypeLowFareBucket $lowFareBucket): self
    {
        $this->lowFareBucket = $lowFareBucket;

        return $this;
    }
}
