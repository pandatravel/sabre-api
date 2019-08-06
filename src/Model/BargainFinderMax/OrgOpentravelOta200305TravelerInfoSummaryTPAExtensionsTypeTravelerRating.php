<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305TravelerInfoSummaryTPAExtensionsTypeTravelerRating extends AbstractModel
{
    /**
     * @var OrgOpentravelOta200305TravelerInfoSummaryTPAExtensionsTypeTravelerRatingFrequentFlyer[]
     */
    protected $frequentFlyer;
    /**
     * @var OrgOpentravelOta200305TravelerInfoSummaryTPAExtensionsTypeTravelerRatingScore[]
     */
    protected $score;

    /**
     * @return OrgOpentravelOta200305TravelerInfoSummaryTPAExtensionsTypeTravelerRatingFrequentFlyer[]
     */
    public function getFrequentFlyer(): array
    {
        return $this->frequentFlyer;
    }

    /**
     * @param OrgOpentravelOta200305TravelerInfoSummaryTPAExtensionsTypeTravelerRatingFrequentFlyer[] $frequentFlyer
     *
     * @return self
     */
    public function setFrequentFlyer(array $frequentFlyer): self
    {
        $this->frequentFlyer = $frequentFlyer;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305TravelerInfoSummaryTPAExtensionsTypeTravelerRatingScore[]
     */
    public function getScore(): array
    {
        return $this->score;
    }

    /**
     * @param OrgOpentravelOta200305TravelerInfoSummaryTPAExtensionsTypeTravelerRatingScore[] $score
     *
     * @return self
     */
    public function setScore(array $score): self
    {
        $this->score = $score;

        return $this;
    }
}
