<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305TravelerInfoSummaryTPAExtensionsTypeTravelerRatingFrequentFlyer extends AbstractModel
{
    /**
     * Two-character carrier code for the airline.
     *
     * @var string
     */
    protected $carrier;
    /**
     * Frequent Flyer tiers for one traveler.
     *
     * @var int
     */
    protected $tier;

    /**
     * Two-character carrier code for the airline.
     *
     * @return string
     */
    public function getCarrier(): ?string
    {
        return $this->carrier;
    }

    /**
     * Two-character carrier code for the airline.
     *
     * @param string $carrier
     *
     * @return self
     */
    public function setCarrier(?string $carrier): self
    {
        $this->carrier = $carrier;

        return $this;
    }

    /**
     * Frequent Flyer tiers for one traveler.
     *
     * @return int
     */
    public function getTier(): ?int
    {
        return $this->tier;
    }

    /**
     * Frequent Flyer tiers for one traveler.
     *
     * @param int $tier
     *
     * @return self
     */
    public function setTier(?int $tier): self
    {
        $this->tier = $tier;

        return $this;
    }
}
