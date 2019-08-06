<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305StayRestrictionsTypeMaximumStay extends AbstractModel
{
    /**
     * The amount of elapsed time or number of occurrences of a day of the week that must occur to satisfy a maximum stay requirement.
     *
     * @var int
     */
    protected $maxStay;
    /**
     * The specific date for the maximum stay requirement.
     *
     * @var string
     */
    protected $maxStayDate;
    /**
     * The time of day when return travel may commence.,Code indicating whether travel must commence or be completed in order to satisfy the stay restriction.
     *
     * @var string
     */
    protected $returnTimeOfDay;
    /**
     * @var string
     */
    protected $returnType;
    /**
     * The unit of elapsed time or the day of the week applied to the MaxStay value.
     *
     * @var string
     */
    protected $stayUnit;

    /**
     * The amount of elapsed time or number of occurrences of a day of the week that must occur to satisfy a maximum stay requirement.
     *
     * @return int
     */
    public function getMaxStay(): int
    {
        return $this->maxStay;
    }

    /**
     * The amount of elapsed time or number of occurrences of a day of the week that must occur to satisfy a maximum stay requirement.
     *
     * @param int $maxStay
     *
     * @return self
     */
    public function setMaxStay(int $maxStay): self
    {
        $this->maxStay = $maxStay;

        return $this;
    }

    /**
     * The specific date for the maximum stay requirement.
     *
     * @return string
     */
    public function getMaxStayDate(): string
    {
        return $this->maxStayDate;
    }

    /**
     * The specific date for the maximum stay requirement.
     *
     * @param string $maxStayDate
     *
     * @return self
     */
    public function setMaxStayDate(string $maxStayDate): self
    {
        $this->maxStayDate = $maxStayDate;

        return $this;
    }

    /**
     * The time of day when return travel may commence.,Code indicating whether travel must commence or be completed in order to satisfy the stay restriction.
     *
     * @return string
     */
    public function getReturnTimeOfDay(): string
    {
        return $this->returnTimeOfDay;
    }

    /**
     * The time of day when return travel may commence.,Code indicating whether travel must commence or be completed in order to satisfy the stay restriction.
     *
     * @param string $returnTimeOfDay
     *
     * @return self
     */
    public function setReturnTimeOfDay(string $returnTimeOfDay): self
    {
        $this->returnTimeOfDay = $returnTimeOfDay;

        return $this;
    }

    /**
     * @return string
     */
    public function getReturnType(): string
    {
        return $this->returnType;
    }

    /**
     * @param string $returnType
     *
     * @return self
     */
    public function setReturnType(string $returnType): self
    {
        $this->returnType = $returnType;

        return $this;
    }

    /**
     * The unit of elapsed time or the day of the week applied to the MaxStay value.
     *
     * @return string
     */
    public function getStayUnit(): string
    {
        return $this->stayUnit;
    }

    /**
     * The unit of elapsed time or the day of the week applied to the MaxStay value.
     *
     * @param string $stayUnit
     *
     * @return self
     */
    public function setStayUnit(string $stayUnit): self
    {
        $this->stayUnit = $stayUnit;

        return $this;
    }
}
