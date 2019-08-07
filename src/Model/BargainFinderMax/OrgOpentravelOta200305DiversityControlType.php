<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

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
     * @return OrgOpentravelOta200305DiversityControlTypeDimensions|null
     */
    public function getDimensions(): ?OrgOpentravelOta200305DiversityControlTypeDimensions
    {
        return $this->dimensions;
    }

    /**
     * @param OrgOpentravelOta200305DiversityControlTypeDimensions|null $dimensions
     *
     * @return self
     */
    public function setDimensions(?OrgOpentravelOta200305DiversityControlTypeDimensions $dimensions): self
    {
        $this->dimensions = $dimensions;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305DiversityControlTypeLowFareBucket|null
     */
    public function getLowFareBucket(): ?OrgOpentravelOta200305DiversityControlTypeLowFareBucket
    {
        return $this->lowFareBucket;
    }

    /**
     * @param OrgOpentravelOta200305DiversityControlTypeLowFareBucket|null $lowFareBucket
     *
     * @return self
     */
    public function setLowFareBucket(?OrgOpentravelOta200305DiversityControlTypeLowFareBucket $lowFareBucket): self
    {
        $this->lowFareBucket = $lowFareBucket;

        return $this;
    }
}
