<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

class OrgOpentravelOta200305InterlineBrandsType
{
    /**
     * @var OrgOpentravelOta200305BrandType[]
     */
    protected $brand;
    /**
     * If specific XX brand is not available for requested date/flight, another cheapest brand will be returned combined with available XX brand.
     *
     * @var bool
     */
    protected $changeBrandForSoldout;

    /**
     * @return OrgOpentravelOta200305BrandType[]
     */
    public function getBrand(): ?array
    {
        return $this->brand;
    }

    /**
     * @param OrgOpentravelOta200305BrandType[] $brand
     *
     * @return self
     */
    public function setBrand(?array $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * If specific XX brand is not available for requested date/flight, another cheapest brand will be returned combined with available XX brand.
     *
     * @return bool
     */
    public function getChangeBrandForSoldout(): ?bool
    {
        return $this->changeBrandForSoldout;
    }

    /**
     * If specific XX brand is not available for requested date/flight, another cheapest brand will be returned combined with available XX brand.
     *
     * @param bool $changeBrandForSoldout
     *
     * @return self
     */
    public function setChangeBrandForSoldout(?bool $changeBrandForSoldout): self
    {
        $this->changeBrandForSoldout = $changeBrandForSoldout;

        return $this;
    }
}
