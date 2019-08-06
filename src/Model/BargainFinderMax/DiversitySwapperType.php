<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class DiversitySwapperType extends AbstractModel
{
    /**
     * (Penalty * price / 10) -- by which itineraries are sorted in Diversity Swapper.
     *
     * @var float
     */
    protected $weighedPrice;

    /**
     * (Penalty * price / 10) -- by which itineraries are sorted in Diversity Swapper.
     *
     * @return float
     */
    public function getWeighedPrice(): float
    {
        return $this->weighedPrice;
    }

    /**
     * (Penalty * price / 10) -- by which itineraries are sorted in Diversity Swapper.
     *
     * @param float $weighedPrice
     *
     * @return self
     */
    public function setWeighedPrice(float $weighedPrice): self
    {
        $this->weighedPrice = $weighedPrice;

        return $this;
    }
}
