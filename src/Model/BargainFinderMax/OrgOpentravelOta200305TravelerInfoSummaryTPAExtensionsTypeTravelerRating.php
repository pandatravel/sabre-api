<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

class OrgOpentravelOta200305TravelerInfoSummaryTPAExtensionsTypeTravelerRating
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
    public function getFrequentFlyer(): ?array
    {
        return $this->frequentFlyer;
    }

    /**
     * @param OrgOpentravelOta200305TravelerInfoSummaryTPAExtensionsTypeTravelerRatingFrequentFlyer[] $frequentFlyer
     *
     * @return self
     */
    public function setFrequentFlyer(?array $frequentFlyer): self
    {
        $this->frequentFlyer = $frequentFlyer;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305TravelerInfoSummaryTPAExtensionsTypeTravelerRatingScore[]
     */
    public function getScore(): ?array
    {
        return $this->score;
    }

    /**
     * @param OrgOpentravelOta200305TravelerInfoSummaryTPAExtensionsTypeTravelerRatingScore[] $score
     *
     * @return self
     */
    public function setScore(?array $score): self
    {
        $this->score = $score;

        return $this;
    }
}
