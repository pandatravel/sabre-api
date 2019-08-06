<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305DiversityControlTypeDimensionsCarrier extends AbstractModel
{
    /**
     * @var OrgOpentravelOta200305DiversityControlTypeDimensionsCarrierDefault
     */
    protected $default;
    /**
     * @var bool
     */
    protected $onlineIndicator;
    /**
     * @var OrgOpentravelOta200305DiversityControlTypeDimensionsCarrierOverride[]
     */
    protected $override;
    /**
     * @var float
     */
    protected $weight;

    /**
     * @return OrgOpentravelOta200305DiversityControlTypeDimensionsCarrierDefault
     */
    public function getDefault(): OrgOpentravelOta200305DiversityControlTypeDimensionsCarrierDefault
    {
        return $this->default;
    }

    /**
     * @param OrgOpentravelOta200305DiversityControlTypeDimensionsCarrierDefault $default
     *
     * @return self
     */
    public function setDefault(OrgOpentravelOta200305DiversityControlTypeDimensionsCarrierDefault $default): self
    {
        $this->default = $default;

        return $this;
    }

    /**
     * @return bool
     */
    public function getOnlineIndicator(): bool
    {
        return $this->onlineIndicator;
    }

    /**
     * @param bool $onlineIndicator
     *
     * @return self
     */
    public function setOnlineIndicator(bool $onlineIndicator): self
    {
        $this->onlineIndicator = $onlineIndicator;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305DiversityControlTypeDimensionsCarrierOverride[]
     */
    public function getOverride(): array
    {
        return $this->override;
    }

    /**
     * @param OrgOpentravelOta200305DiversityControlTypeDimensionsCarrierOverride[] $override
     *
     * @return self
     */
    public function setOverride(array $override): self
    {
        $this->override = $override;

        return $this;
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     *
     * @return self
     */
    public function setWeight(float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }
}
