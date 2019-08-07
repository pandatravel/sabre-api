<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsBrandedFareIndicators extends AbstractModel
{
    /**
     * Describes brand filters.
     *
     * @var OrgOpentravelOta200305BrandFiltersType
     */
    protected $brandFilters;
    /**
     * Allow brandless legs in multiple brands upsell solutions.
     *
     * @var bool
     */
    protected $itinParityBrandlessLeg;
    /**
     * Fallback mode for Multiple Branded Fares with Itin parity, when no itin parity solutions found.
     *
     * @var string
     */
    protected $itinParityFallbackMode;
    /**
     * @var bool
     */
    protected $keepLegParityForLowestSingle;
    /**
     * Return multiple brand options per itin.
     *
     * @var bool
     */
    protected $multipleBrandedFares;
    /**
     * Multiple Branded Fares parity mode.
     *
     * @var string
     */
    protected $parityMode;
    /**
     * Return ancillaries from the ATPCO Branded Fares Feature Table 166.
     *
     * @var bool
     */
    protected $returnBrandAncillaries;
    /**
     * @var OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsBrandedFareIndicatorsReturnCheapestUnbrandedFare
     */
    protected $returnCheapestUnbrandedFare;
    /**
     * Return single brand option per itin.
     *
     * @var bool
     */
    protected $singleBrandedFare;
    /**
     * Indicates maximum number of requested branded upsells.
     *
     * @var int
     */
    protected $upsellLimit;

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
     * Allow brandless legs in multiple brands upsell solutions.
     *
     * @return bool
     */
    public function getItinParityBrandlessLeg(): ?bool
    {
        return $this->itinParityBrandlessLeg;
    }

    /**
     * Allow brandless legs in multiple brands upsell solutions.
     *
     * @param bool $itinParityBrandlessLeg
     *
     * @return self
     */
    public function setItinParityBrandlessLeg(?bool $itinParityBrandlessLeg): self
    {
        $this->itinParityBrandlessLeg = $itinParityBrandlessLeg;

        return $this;
    }

    /**
     * Fallback mode for Multiple Branded Fares with Itin parity, when no itin parity solutions found.
     *
     * @return string
     */
    public function getItinParityFallbackMode(): ?string
    {
        return $this->itinParityFallbackMode;
    }

    /**
     * Fallback mode for Multiple Branded Fares with Itin parity, when no itin parity solutions found.
     *
     * @param string $itinParityFallbackMode
     *
     * @return self
     */
    public function setItinParityFallbackMode(?string $itinParityFallbackMode): self
    {
        $this->itinParityFallbackMode = $itinParityFallbackMode;

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
     * Return multiple brand options per itin.
     *
     * @return bool
     */
    public function getMultipleBrandedFares(): ?bool
    {
        return $this->multipleBrandedFares;
    }

    /**
     * Return multiple brand options per itin.
     *
     * @param bool $multipleBrandedFares
     *
     * @return self
     */
    public function setMultipleBrandedFares(?bool $multipleBrandedFares): self
    {
        $this->multipleBrandedFares = $multipleBrandedFares;

        return $this;
    }

    /**
     * Multiple Branded Fares parity mode.
     *
     * @return string
     */
    public function getParityMode(): ?string
    {
        return $this->parityMode;
    }

    /**
     * Multiple Branded Fares parity mode.
     *
     * @param string $parityMode
     *
     * @return self
     */
    public function setParityMode(?string $parityMode): self
    {
        $this->parityMode = $parityMode;

        return $this;
    }

    /**
     * Return ancillaries from the ATPCO Branded Fares Feature Table 166.
     *
     * @return bool
     */
    public function getReturnBrandAncillaries(): ?bool
    {
        return $this->returnBrandAncillaries;
    }

    /**
     * Return ancillaries from the ATPCO Branded Fares Feature Table 166.
     *
     * @param bool $returnBrandAncillaries
     *
     * @return self
     */
    public function setReturnBrandAncillaries(?bool $returnBrandAncillaries): self
    {
        $this->returnBrandAncillaries = $returnBrandAncillaries;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsBrandedFareIndicatorsReturnCheapestUnbrandedFare
     */
    public function getReturnCheapestUnbrandedFare(): ?OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsBrandedFareIndicatorsReturnCheapestUnbrandedFare
    {
        return $this->returnCheapestUnbrandedFare;
    }

    /**
     * @param OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsBrandedFareIndicatorsReturnCheapestUnbrandedFare $returnCheapestUnbrandedFare
     *
     * @return self
     */
    public function setReturnCheapestUnbrandedFare(?OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsBrandedFareIndicatorsReturnCheapestUnbrandedFare $returnCheapestUnbrandedFare): self
    {
        $this->returnCheapestUnbrandedFare = $returnCheapestUnbrandedFare;

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

    /**
     * Indicates maximum number of requested branded upsells.
     *
     * @return int
     */
    public function getUpsellLimit(): ?int
    {
        return $this->upsellLimit;
    }

    /**
     * Indicates maximum number of requested branded upsells.
     *
     * @param int $upsellLimit
     *
     * @return self
     */
    public function setUpsellLimit(?int $upsellLimit): self
    {
        $this->upsellLimit = $upsellLimit;

        return $this;
    }
}
