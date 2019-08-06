<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305AdvResTicketingTypeAdvReservation extends AbstractModel
{
    /**
     * The amount of elapsed time or number of occurrences of a day of the week before departure needed to satisfy an advance reservation requirement.
     *
     * @var string
     */
    protected $latestPeriod;
    /**
     * The time of day by which reservations must be made on the last day that advance reservations can be made.
     *
     * @var string
     */
    protected $latestTimeOfDay;
    /**
     * The unit of elapsed time or the day of the week to be applied to the LatestPeriod value.
     *
     * @var string
     */
    protected $latestUnit;

    /**
     * The amount of elapsed time or number of occurrences of a day of the week before departure needed to satisfy an advance reservation requirement.
     *
     * @return string
     */
    public function getLatestPeriod(): string
    {
        return $this->latestPeriod;
    }

    /**
     * The amount of elapsed time or number of occurrences of a day of the week before departure needed to satisfy an advance reservation requirement.
     *
     * @param string $latestPeriod
     *
     * @return self
     */
    public function setLatestPeriod(string $latestPeriod): self
    {
        $this->latestPeriod = $latestPeriod;

        return $this;
    }

    /**
     * The time of day by which reservations must be made on the last day that advance reservations can be made.
     *
     * @return string
     */
    public function getLatestTimeOfDay(): string
    {
        return $this->latestTimeOfDay;
    }

    /**
     * The time of day by which reservations must be made on the last day that advance reservations can be made.
     *
     * @param string $latestTimeOfDay
     *
     * @return self
     */
    public function setLatestTimeOfDay(string $latestTimeOfDay): self
    {
        $this->latestTimeOfDay = $latestTimeOfDay;

        return $this;
    }

    /**
     * The unit of elapsed time or the day of the week to be applied to the LatestPeriod value.
     *
     * @return string
     */
    public function getLatestUnit(): string
    {
        return $this->latestUnit;
    }

    /**
     * The unit of elapsed time or the day of the week to be applied to the LatestPeriod value.
     *
     * @param string $latestUnit
     *
     * @return self
     */
    public function setLatestUnit(string $latestUnit): self
    {
        $this->latestUnit = $latestUnit;

        return $this;
    }
}
