<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305TravelDateTimeTypeDepartureDatesLengthOfStay extends AbstractModel
{
    /**
     * @var int
     */
    protected $days;

    /**
     * @return int
     */
    public function getDays(): int
    {
        return $this->days;
    }

    /**
     * @param int $days
     *
     * @return self
     */
    public function setDays(int $days): self
    {
        $this->days = $days;

        return $this;
    }
}
