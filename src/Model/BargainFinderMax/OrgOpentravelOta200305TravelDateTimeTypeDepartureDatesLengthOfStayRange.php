<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

class OrgOpentravelOta200305TravelDateTimeTypeDepartureDatesLengthOfStayRange
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
