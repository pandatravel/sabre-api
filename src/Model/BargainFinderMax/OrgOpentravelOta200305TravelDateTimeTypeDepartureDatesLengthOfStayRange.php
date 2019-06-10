<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305TravelDateTimeTypeDepartureDatesLengthOfStayRange extends AbstractModel
{
    /**
     * (inclusive).
     *
     * @var int
     */
    protected $maxDays;
    /**
     * (inclusive).
     *
     * @var int
     */
    protected $minDays;

    /**
     * (inclusive).
     *
     * @return int
     */
    public function getMaxDays(): ?int
    {
        return $this->maxDays;
    }

    /**
     * (inclusive).
     *
     * @param int $maxDays
     *
     * @return self
     */
    public function setMaxDays(?int $maxDays): self
    {
        $this->maxDays = $maxDays;

        return $this;
    }

    /**
     * (inclusive).
     *
     * @return int
     */
    public function getMinDays(): ?int
    {
        return $this->minDays;
    }

    /**
     * (inclusive).
     *
     * @param int $minDays
     *
     * @return self
     */
    public function setMinDays(?int $minDays): self
    {
        $this->minDays = $minDays;

        return $this;
    }
}
