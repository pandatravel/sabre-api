<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305AdvResTicketingTypeAdvTicketing extends AbstractModel
{
    /**
     * A length of time expressed as either an amount of time or the number of occurrences of a day of the week before departure that a ticket must be purchased.
     *
     * @var string
     */
    protected $fromDepartPeriod;
    /**
     * The time of day prior to departure when the ticket must be purchased.
     *
     * @var string
     */
    protected $fromDepartTimeOfDay;
    /**
     * The unit of elapsed time or the day of the week to be applied to the the period before departure that a ticket must be purchased.
     *
     * @var string
     */
    protected $fromDepartUnit;
    /**
     * A length of time expressed as either an amount of time or the number of occurrences of a day of the week after reservations are made that a ticket must be purchased.
     *
     * @var string
     */
    protected $fromResPeriod;
    /**
     * The time of day after reservations are made by which a ticket must be purchased.
     *
     * @var string
     */
    protected $fromResTimeOfDay;
    /**
     * The unit of elapsed time or the day of the week to be applied to the period after reservation are made that a ticket must be purchased.
     *
     * @var string
     */
    protected $fromResUnit;

    /**
     * A length of time expressed as either an amount of time or the number of occurrences of a day of the week before departure that a ticket must be purchased.
     *
     * @return string
     */
    public function getFromDepartPeriod(): string
    {
        return $this->fromDepartPeriod;
    }

    /**
     * A length of time expressed as either an amount of time or the number of occurrences of a day of the week before departure that a ticket must be purchased.
     *
     * @param string $fromDepartPeriod
     *
     * @return self
     */
    public function setFromDepartPeriod(string $fromDepartPeriod): self
    {
        $this->fromDepartPeriod = $fromDepartPeriod;

        return $this;
    }

    /**
     * The time of day prior to departure when the ticket must be purchased.
     *
     * @return string
     */
    public function getFromDepartTimeOfDay(): string
    {
        return $this->fromDepartTimeOfDay;
    }

    /**
     * The time of day prior to departure when the ticket must be purchased.
     *
     * @param string $fromDepartTimeOfDay
     *
     * @return self
     */
    public function setFromDepartTimeOfDay(string $fromDepartTimeOfDay): self
    {
        $this->fromDepartTimeOfDay = $fromDepartTimeOfDay;

        return $this;
    }

    /**
     * The unit of elapsed time or the day of the week to be applied to the the period before departure that a ticket must be purchased.
     *
     * @return string
     */
    public function getFromDepartUnit(): string
    {
        return $this->fromDepartUnit;
    }

    /**
     * The unit of elapsed time or the day of the week to be applied to the the period before departure that a ticket must be purchased.
     *
     * @param string $fromDepartUnit
     *
     * @return self
     */
    public function setFromDepartUnit(string $fromDepartUnit): self
    {
        $this->fromDepartUnit = $fromDepartUnit;

        return $this;
    }

    /**
     * A length of time expressed as either an amount of time or the number of occurrences of a day of the week after reservations are made that a ticket must be purchased.
     *
     * @return string
     */
    public function getFromResPeriod(): string
    {
        return $this->fromResPeriod;
    }

    /**
     * A length of time expressed as either an amount of time or the number of occurrences of a day of the week after reservations are made that a ticket must be purchased.
     *
     * @param string $fromResPeriod
     *
     * @return self
     */
    public function setFromResPeriod(string $fromResPeriod): self
    {
        $this->fromResPeriod = $fromResPeriod;

        return $this;
    }

    /**
     * The time of day after reservations are made by which a ticket must be purchased.
     *
     * @return string
     */
    public function getFromResTimeOfDay(): string
    {
        return $this->fromResTimeOfDay;
    }

    /**
     * The time of day after reservations are made by which a ticket must be purchased.
     *
     * @param string $fromResTimeOfDay
     *
     * @return self
     */
    public function setFromResTimeOfDay(string $fromResTimeOfDay): self
    {
        $this->fromResTimeOfDay = $fromResTimeOfDay;

        return $this;
    }

    /**
     * The unit of elapsed time or the day of the week to be applied to the period after reservation are made that a ticket must be purchased.
     *
     * @return string
     */
    public function getFromResUnit(): string
    {
        return $this->fromResUnit;
    }

    /**
     * The unit of elapsed time or the day of the week to be applied to the period after reservation are made that a ticket must be purchased.
     *
     * @param string $fromResUnit
     *
     * @return self
     */
    public function setFromResUnit(string $fromResUnit): self
    {
        $this->fromResUnit = $fromResUnit;

        return $this;
    }
}
