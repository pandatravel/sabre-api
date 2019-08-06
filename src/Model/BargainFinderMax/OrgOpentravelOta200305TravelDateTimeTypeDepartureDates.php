<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305TravelDateTimeTypeDepartureDates extends AbstractModel
{
    /**
     * @var OrgOpentravelOta200305TravelDateTimeTypeArrivalDatesDay[]
     */
    protected $day;
    /**
     * @var OrgOpentravelOta200305TravelDateTimeTypeArrivalDatesDaysRange[]
     */
    protected $daysRange;
    /**
     * @var OrgOpentravelOta200305TravelDateTimeTypeDepartureDatesLengthOfStay[]
     */
    protected $lengthOfStay;
    /**
     * @var OrgOpentravelOta200305TravelDateTimeTypeDepartureDatesLengthOfStayRange[]
     */
    protected $lengthOfStayRange;

    /**
     * @return OrgOpentravelOta200305TravelDateTimeTypeArrivalDatesDay[]
     */
    public function getDay(): array
    {
        return $this->day;
    }

    /**
     * @param OrgOpentravelOta200305TravelDateTimeTypeArrivalDatesDay[] $day
     *
     * @return self
     */
    public function setDay(array $day): self
    {
        $this->day = $day;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305TravelDateTimeTypeArrivalDatesDaysRange[]
     */
    public function getDaysRange(): array
    {
        return $this->daysRange;
    }

    /**
     * @param OrgOpentravelOta200305TravelDateTimeTypeArrivalDatesDaysRange[] $daysRange
     *
     * @return self
     */
    public function setDaysRange(array $daysRange): self
    {
        $this->daysRange = $daysRange;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305TravelDateTimeTypeDepartureDatesLengthOfStay[]
     */
    public function getLengthOfStay(): array
    {
        return $this->lengthOfStay;
    }

    /**
     * @param OrgOpentravelOta200305TravelDateTimeTypeDepartureDatesLengthOfStay[] $lengthOfStay
     *
     * @return self
     */
    public function setLengthOfStay(array $lengthOfStay): self
    {
        $this->lengthOfStay = $lengthOfStay;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305TravelDateTimeTypeDepartureDatesLengthOfStayRange[]
     */
    public function getLengthOfStayRange(): array
    {
        return $this->lengthOfStayRange;
    }

    /**
     * @param OrgOpentravelOta200305TravelDateTimeTypeDepartureDatesLengthOfStayRange[] $lengthOfStayRange
     *
     * @return self
     */
    public function setLengthOfStayRange(array $lengthOfStayRange): self
    {
        $this->lengthOfStayRange = $lengthOfStayRange;

        return $this;
    }
}
