<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305TravelerInfoSummaryTPAExtensionsType extends AbstractModel
{
    /**
     * @var OrgOpentravelOta200305TravelerInfoSummaryTPAExtensionsTypeTravelerRating[]
     */
    protected $travelerRating;

    /**
     * @return OrgOpentravelOta200305TravelerInfoSummaryTPAExtensionsTypeTravelerRating[]
     */
    public function getTravelerRating(): array
    {
        return $this->travelerRating;
    }

    /**
     * @param OrgOpentravelOta200305TravelerInfoSummaryTPAExtensionsTypeTravelerRating[] $travelerRating
     *
     * @return self
     */
    public function setTravelerRating(array $travelerRating): self
    {
        $this->travelerRating = $travelerRating;

        return $this;
    }
}
