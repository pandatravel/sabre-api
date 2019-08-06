<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsSplitTaxes extends AbstractModel
{
    /**
     * @var bool
     */
    protected $byFareComponent;
    /**
     * @var bool
     */
    protected $byLeg;

    /**
     * @return bool
     */
    public function getByFareComponent(): bool
    {
        return $this->byFareComponent;
    }

    /**
     * @param bool $byFareComponent
     *
     * @return self
     */
    public function setByFareComponent(bool $byFareComponent): self
    {
        $this->byFareComponent = $byFareComponent;

        return $this;
    }

    /**
     * @return bool
     */
    public function getByLeg(): bool
    {
        return $this->byLeg;
    }

    /**
     * @param bool $byLeg
     *
     * @return self
     */
    public function setByLeg(bool $byLeg): self
    {
        $this->byLeg = $byLeg;

        return $this;
    }
}
