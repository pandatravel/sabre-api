<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class FareComponentIDType extends AbstractModel
{
    /**
     * @var BrandFeatureIDType[]
     */
    protected $brandFeatures;
    /**
     * Effective price deviation.
     *
     * @var float
     */
    protected $effectivePriceDeviation;
    /**
     * Reference to FareComponentDesc ID.
     *
     * @var int
     */
    protected $ref;
    /**
     * Segment additional data.
     *
     * @var FareComponentSegmentsType[]
     */
    protected $segments;
    /**
     * Tax summary information.
     *
     * @var TaxSummaryIDType[]
     */
    protected $taxSummaries;
    /**
     * @var TaxIDType[]
     */
    protected $taxes;
    /**
     * @var TotalFareType
     */
    protected $totalFare;

    /**
     * @return BrandFeatureIDType[]
     */
    public function getBrandFeatures(): ?array
    {
        return $this->brandFeatures;
    }

    /**
     * @param BrandFeatureIDType[] $brandFeatures
     *
     * @return self
     */
    public function setBrandFeatures(?array $brandFeatures): self
    {
        $this->brandFeatures = $brandFeatures;

        return $this;
    }

    /**
     * Effective price deviation.
     *
     * @return float
     */
    public function getEffectivePriceDeviation(): ?float
    {
        return $this->effectivePriceDeviation;
    }

    /**
     * Effective price deviation.
     *
     * @param float $effectivePriceDeviation
     *
     * @return self
     */
    public function setEffectivePriceDeviation(?float $effectivePriceDeviation): self
    {
        $this->effectivePriceDeviation = $effectivePriceDeviation;

        return $this;
    }

    /**
     * Reference to FareComponentDesc ID.
     *
     * @return int
     */
    public function getRef(): ?int
    {
        return $this->ref;
    }

    /**
     * Reference to FareComponentDesc ID.
     *
     * @param int $ref
     *
     * @return self
     */
    public function setRef(?int $ref): self
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * Segment additional data.
     *
     * @return FareComponentSegmentsType[]
     */
    public function getSegments(): ?array
    {
        return $this->segments;
    }

    /**
     * Segment additional data.
     *
     * @param FareComponentSegmentsType[] $segments
     *
     * @return self
     */
    public function setSegments(?array $segments): self
    {
        $this->segments = $segments;

        return $this;
    }

    /**
     * Tax summary information.
     *
     * @return TaxSummaryIDType[]
     */
    public function getTaxSummaries(): ?array
    {
        return $this->taxSummaries;
    }

    /**
     * Tax summary information.
     *
     * @param TaxSummaryIDType[] $taxSummaries
     *
     * @return self
     */
    public function setTaxSummaries(?array $taxSummaries): self
    {
        $this->taxSummaries = $taxSummaries;

        return $this;
    }

    /**
     * @return TaxIDType[]
     */
    public function getTaxes(): ?array
    {
        return $this->taxes;
    }

    /**
     * @param TaxIDType[] $taxes
     *
     * @return self
     */
    public function setTaxes(?array $taxes): self
    {
        $this->taxes = $taxes;

        return $this;
    }

    /**
     * @return TotalFareType
     */
    public function getTotalFare(): ?TotalFareType
    {
        return $this->totalFare;
    }

    /**
     * @param TotalFareType $totalFare
     *
     * @return self
     */
    public function setTotalFare(?TotalFareType $totalFare): self
    {
        $this->totalFare = $totalFare;

        return $this;
    }
}
