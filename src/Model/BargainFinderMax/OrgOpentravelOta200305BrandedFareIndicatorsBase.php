<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305BrandedFareIndicatorsBase extends AbstractModel
{
    /**
     * Describes brand filters.
     *
     * @var OrgOpentravelOta200305BrandFiltersType
     */
    protected $brandFilters;
    /**
     * @var bool
     */
    protected $keepLegParityForLowestSingle;
    /**
     * Return single brand option per itin.
     *
     * @var bool
     */
    protected $singleBrandedFare;

    /**
     * Describes brand filters.
     *
     * @return OrgOpentravelOta200305BrandFiltersType
     */
    public function getBrandFilters(): ?OrgOpentravelOta200305BrandFiltersType
    {
        return $this->brandFilters;
    }

    /**
     * Describes brand filters.
     *
     * @param OrgOpentravelOta200305BrandFiltersType $brandFilters
     *
     * @return self
     */
    public function setBrandFilters(?OrgOpentravelOta200305BrandFiltersType $brandFilters): self
    {
        $this->brandFilters = $brandFilters;

        return $this;
    }

    /**
     * @return bool
     */
    public function getKeepLegParityForLowestSingle(): ?bool
    {
        return $this->keepLegParityForLowestSingle;
    }

    /**
     * @param bool $keepLegParityForLowestSingle
     *
     * @return self
     */
    public function setKeepLegParityForLowestSingle(?bool $keepLegParityForLowestSingle): self
    {
        $this->keepLegParityForLowestSingle = $keepLegParityForLowestSingle;

        return $this;
    }

    /**
     * Return single brand option per itin.
     *
     * @return bool
     */
    public function getSingleBrandedFare(): ?bool
    {
        return $this->singleBrandedFare;
    }

    /**
     * Return single brand option per itin.
     *
     * @param bool $singleBrandedFare
     *
     * @return self
     */
    public function setSingleBrandedFare(?bool $singleBrandedFare): self
    {
        $this->singleBrandedFare = $singleBrandedFare;

        return $this;
    }
}
