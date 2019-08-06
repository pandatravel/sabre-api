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
     * If set, given parity mode will be forced on the cheapest branded fare solution. If not specified, no parity (None) is forced on the cheapest branded fare solution. It's designed to work with MultipleBrandedFares feature only.
     *
     * @var string
     */
    protected $parityModeForLowest;
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
    public function getBrandFilters(): OrgOpentravelOta200305BrandFiltersType
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
    public function setBrandFilters(OrgOpentravelOta200305BrandFiltersType $brandFilters): self
    {
        $this->brandFilters = $brandFilters;

        return $this;
    }

    /**
     * If set, given parity mode will be forced on the cheapest branded fare solution. If not specified, no parity (None) is forced on the cheapest branded fare solution. It's designed to work with MultipleBrandedFares feature only.
     *
     * @return string
     */
    public function getParityModeForLowest(): string
    {
        return $this->parityModeForLowest;
    }

    /**
     * If set, given parity mode will be forced on the cheapest branded fare solution. If not specified, no parity (None) is forced on the cheapest branded fare solution. It's designed to work with MultipleBrandedFares feature only.
     *
     * @param string $parityModeForLowest
     *
     * @return self
     */
    public function setParityModeForLowest(string $parityModeForLowest): self
    {
        $this->parityModeForLowest = $parityModeForLowest;

        return $this;
    }

    /**
     * Return single brand option per itin.
     *
     * @return bool
     */
    public function getSingleBrandedFare(): bool
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
    public function setSingleBrandedFare(bool $singleBrandedFare): self
    {
        $this->singleBrandedFare = $singleBrandedFare;

        return $this;
    }
}
