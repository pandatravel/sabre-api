<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsDiversityParametersWeightings extends AbstractModel
{
    /**
     * Defines how important price options are on a scale from 0 to 10.
     *
     * @var int
     */
    protected $priceWeight;
    /**
     * Defines how important travel time options are on a scale from 0 to 10.
     *
     * @var int
     */
    protected $travelTimeWeight;

    /**
     * Defines how important price options are on a scale from 0 to 10.
     *
     * @return int
     */
    public function getPriceWeight(): ?int
    {
        return $this->priceWeight;
    }

    /**
     * Defines how important price options are on a scale from 0 to 10.
     *
     * @param int $priceWeight
     *
     * @return self
     */
    public function setPriceWeight(?int $priceWeight): self
    {
        $this->priceWeight = $priceWeight;

        return $this;
    }

    /**
     * Defines how important travel time options are on a scale from 0 to 10.
     *
     * @return int
     */
    public function getTravelTimeWeight(): ?int
    {
        return $this->travelTimeWeight;
    }

    /**
     * Defines how important travel time options are on a scale from 0 to 10.
     *
     * @param int $travelTimeWeight
     *
     * @return self
     */
    public function setTravelTimeWeight(?int $travelTimeWeight): self
    {
        $this->travelTimeWeight = $travelTimeWeight;

        return $this;
    }
}
