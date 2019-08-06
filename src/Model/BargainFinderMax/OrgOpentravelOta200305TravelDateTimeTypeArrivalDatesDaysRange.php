<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305TravelDateTimeTypeArrivalDatesDaysRange extends AbstractModel
{
    /**
     * IntelliSell Date type (required format: YYYY-MM-DD).
     *
     * @var string
     */
    protected $fromDate;
    /**
     * IntelliSell Date type (required format: YYYY-MM-DD).
     *
     * @var string
     */
    protected $toDate;
    /**
     * Value format: First letter of the name of the day or '_', eg. 'SMT___S' means we are interested in departing at Saturday, Sunday, Monday or Tuesday. Even if there are schedules for Wednesday, Thursday or Friday, they won't be returned in ISell response.
     *
     * @var string
     */
    protected $weekDays;

    /**
     * IntelliSell Date type (required format: YYYY-MM-DD).
     *
     * @return string
     */
    public function getFromDate(): string
    {
        return $this->fromDate;
    }

    /**
     * IntelliSell Date type (required format: YYYY-MM-DD).
     *
     * @param string $fromDate
     *
     * @return self
     */
    public function setFromDate(string $fromDate): self
    {
        $this->fromDate = $fromDate;

        return $this;
    }

    /**
     * IntelliSell Date type (required format: YYYY-MM-DD).
     *
     * @return string
     */
    public function getToDate(): string
    {
        return $this->toDate;
    }

    /**
     * IntelliSell Date type (required format: YYYY-MM-DD).
     *
     * @param string $toDate
     *
     * @return self
     */
    public function setToDate(string $toDate): self
    {
        $this->toDate = $toDate;

        return $this;
    }

    /**
     * Value format: First letter of the name of the day or '_', eg. 'SMT___S' means we are interested in departing at Saturday, Sunday, Monday or Tuesday. Even if there are schedules for Wednesday, Thursday or Friday, they won't be returned in ISell response.
     *
     * @return string
     */
    public function getWeekDays(): string
    {
        return $this->weekDays;
    }

    /**
     * Value format: First letter of the name of the day or '_', eg. 'SMT___S' means we are interested in departing at Saturday, Sunday, Monday or Tuesday. Even if there are schedules for Wednesday, Thursday or Friday, they won't be returned in ISell response.
     *
     * @param string $weekDays
     *
     * @return self
     */
    public function setWeekDays(string $weekDays): self
    {
        $this->weekDays = $weekDays;

        return $this;
    }
}
