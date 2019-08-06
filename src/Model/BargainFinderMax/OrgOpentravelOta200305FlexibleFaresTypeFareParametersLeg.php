<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305FlexibleFaresTypeFareParametersLeg extends AbstractModel
{
    /**
     * This element allows user to get baggage information,Free baggage piece is required.
     *
     * @var OrgOpentravelOta200305BaggageType
     */
    protected $baggage;
    /**
     * Describes brand filters.
     *
     * @var OrgOpentravelOta200305BrandFiltersType
     */
    protected $brandFilters;
    /**
     * This element specifies preffered cabin type for flexible fare leg,A cabin is either Premium First (P), First (F), Premium Business (J), Business (C), Premium Economy (S) or Economy (Y).
     *
     * @var OrgOpentravelOta200305FlexibleFaresTypeFareParametersLegCabin
     */
    protected $cabin;
    /**
     * @var OrgOpentravelOta200305ClassOfServiceElemType[]
     */
    protected $classOfService;
    /**
     * @var OrgOpentravelOta200305FareBasisType[]
     */
    protected $fareBasis;
    /**
     * @var OrgOpentravelOta200305FareTypePrefType[]
     */
    protected $fareType;
    /**
     * @var float
     */
    protected $num;

    /**
     * This element allows user to get baggage information,Free baggage piece is required.
     *
     * @return OrgOpentravelOta200305BaggageType
     */
    public function getBaggage(): OrgOpentravelOta200305BaggageType
    {
        return $this->baggage;
    }

    /**
     * This element allows user to get baggage information,Free baggage piece is required.
     *
     * @param OrgOpentravelOta200305BaggageType $baggage
     *
     * @return self
     */
    public function setBaggage(OrgOpentravelOta200305BaggageType $baggage): self
    {
        $this->baggage = $baggage;

        return $this;
    }

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
     * This element specifies preffered cabin type for flexible fare leg,A cabin is either Premium First (P), First (F), Premium Business (J), Business (C), Premium Economy (S) or Economy (Y).
     *
     * @return OrgOpentravelOta200305FlexibleFaresTypeFareParametersLegCabin
     */
    public function getCabin(): OrgOpentravelOta200305FlexibleFaresTypeFareParametersLegCabin
    {
        return $this->cabin;
    }

    /**
     * This element specifies preffered cabin type for flexible fare leg,A cabin is either Premium First (P), First (F), Premium Business (J), Business (C), Premium Economy (S) or Economy (Y).
     *
     * @param OrgOpentravelOta200305FlexibleFaresTypeFareParametersLegCabin $cabin
     *
     * @return self
     */
    public function setCabin(OrgOpentravelOta200305FlexibleFaresTypeFareParametersLegCabin $cabin): self
    {
        $this->cabin = $cabin;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305ClassOfServiceElemType[]
     */
    public function getClassOfService(): array
    {
        return $this->classOfService;
    }

    /**
     * @param OrgOpentravelOta200305ClassOfServiceElemType[] $classOfService
     *
     * @return self
     */
    public function setClassOfService(array $classOfService): self
    {
        $this->classOfService = $classOfService;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305FareBasisType[]
     */
    public function getFareBasis(): array
    {
        return $this->fareBasis;
    }

    /**
     * @param OrgOpentravelOta200305FareBasisType[] $fareBasis
     *
     * @return self
     */
    public function setFareBasis(array $fareBasis): self
    {
        $this->fareBasis = $fareBasis;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305FareTypePrefType[]
     */
    public function getFareType(): array
    {
        return $this->fareType;
    }

    /**
     * @param OrgOpentravelOta200305FareTypePrefType[] $fareType
     *
     * @return self
     */
    public function setFareType(array $fareType): self
    {
        $this->fareType = $fareType;

        return $this;
    }

    /**
     * @return float
     */
    public function getNum(): float
    {
        return $this->num;
    }

    /**
     * @param float $num
     *
     * @return self
     */
    public function setNum(float $num): self
    {
        $this->num = $num;

        return $this;
    }
}
