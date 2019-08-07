<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305StayRestrictionsType extends AbstractModel
{
    /**
     * Specifies restrictions for the longest length/period of time or last day to begin or complete the return.
     *
     * @var OrgOpentravelOta200305StayRestrictionsTypeMaximumStay
     */
    protected $maximumStay;
    /**
     * Specifies restrictions for the shortest length/period of time or earliest day return travel can commence or be completed.
     *
     * @var OrgOpentravelOta200305StayRestrictionsTypeMinimumStay
     */
    protected $minimumStay;
    /**
     * True indicates that Stay Restrictions exist.
     *
     * @var bool
     */
    protected $stayRestrictionsInd;

    /**
     * Specifies restrictions for the longest length/period of time or last day to begin or complete the return.
     *
     * @return OrgOpentravelOta200305StayRestrictionsTypeMaximumStay
     */
    public function getMaximumStay(): ?OrgOpentravelOta200305StayRestrictionsTypeMaximumStay
    {
        return $this->maximumStay;
    }

    /**
     * Specifies restrictions for the longest length/period of time or last day to begin or complete the return.
     *
     * @param OrgOpentravelOta200305StayRestrictionsTypeMaximumStay $maximumStay
     *
     * @return self
     */
    public function setMaximumStay(?OrgOpentravelOta200305StayRestrictionsTypeMaximumStay $maximumStay): self
    {
        $this->maximumStay = $maximumStay;

        return $this;
    }

    /**
     * Specifies restrictions for the shortest length/period of time or earliest day return travel can commence or be completed.
     *
     * @return OrgOpentravelOta200305StayRestrictionsTypeMinimumStay
     */
    public function getMinimumStay(): ?OrgOpentravelOta200305StayRestrictionsTypeMinimumStay
    {
        return $this->minimumStay;
    }

    /**
     * Specifies restrictions for the shortest length/period of time or earliest day return travel can commence or be completed.
     *
     * @param OrgOpentravelOta200305StayRestrictionsTypeMinimumStay $minimumStay
     *
     * @return self
     */
    public function setMinimumStay(?OrgOpentravelOta200305StayRestrictionsTypeMinimumStay $minimumStay): self
    {
        $this->minimumStay = $minimumStay;

        return $this;
    }

    /**
     * True indicates that Stay Restrictions exist.
     *
     * @return bool
     */
    public function getStayRestrictionsInd(): ?bool
    {
        return $this->stayRestrictionsInd;
    }

    /**
     * True indicates that Stay Restrictions exist.
     *
     * @param bool $stayRestrictionsInd
     *
     * @return self
     */
    public function setStayRestrictionsInd(?bool $stayRestrictionsInd): self
    {
        $this->stayRestrictionsInd = $stayRestrictionsInd;

        return $this;
    }
}
