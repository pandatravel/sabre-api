<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class PricingLegType extends AbstractModel
{
    /**
     * @var int
     */
    protected $ref;
    /**
     * @var string
     */
    protected $status;
    /**
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
     * @return int
     */
    public function getRef(): ?int
    {
        return $this->ref;
    }

    /**
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
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return TaxSummaryIDType[]
     */
    public function getTaxSummaries(): ?array
    {
        return $this->taxSummaries;
    }

    /**
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
