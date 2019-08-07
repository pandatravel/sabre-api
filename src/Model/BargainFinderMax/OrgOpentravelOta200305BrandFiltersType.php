<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305BrandFiltersType extends AbstractModel
{
    /**
     * @var OrgOpentravelOta200305BrandCodePrefType[]
     */
    protected $brand;
    /**
     * @var OrgOpentravelOta200305BrandFiltersTypeNonBrandedFares[]
     */
    protected $nonBrandedFares;

    /**
     * @return OrgOpentravelOta200305BrandCodePrefType[]
     */
    public function getBrand(): ?array
    {
        return $this->brand;
    }

    /**
     * @param OrgOpentravelOta200305BrandCodePrefType[] $brand
     *
     * @return self
     */
    public function setBrand(?array $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305BrandFiltersTypeNonBrandedFares[]
     */
    public function getNonBrandedFares(): ?array
    {
        return $this->nonBrandedFares;
    }

    /**
     * @param OrgOpentravelOta200305BrandFiltersTypeNonBrandedFares[] $nonBrandedFares
     *
     * @return self
     */
    public function setNonBrandedFares(?array $nonBrandedFares): self
    {
        $this->nonBrandedFares = $nonBrandedFares;

        return $this;
    }
}
