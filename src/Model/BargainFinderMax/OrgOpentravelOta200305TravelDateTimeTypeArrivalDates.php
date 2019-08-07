<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305TravelDateTimeTypeArrivalDates extends AbstractModel
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
     * @return OrgOpentravelOta200305TravelDateTimeTypeArrivalDatesDay[]
     */
    public function getDay(): ?array
    {
        return $this->day;
    }

    /**
     * @param OrgOpentravelOta200305TravelDateTimeTypeArrivalDatesDay[] $day
     *
     * @return self
     */
    public function setDay(?array $day): self
    {
        $this->day = $day;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305TravelDateTimeTypeArrivalDatesDaysRange[]
     */
    public function getDaysRange(): ?array
    {
        return $this->daysRange;
    }

    /**
     * @param OrgOpentravelOta200305TravelDateTimeTypeArrivalDatesDaysRange[] $daysRange
     *
     * @return self
     */
    public function setDaysRange(?array $daysRange): self
    {
        $this->daysRange = $daysRange;

        return $this;
    }
}
