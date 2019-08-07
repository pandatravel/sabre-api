<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305StayRestrictionsTypeMinimumStay extends AbstractModel
{
    /**
     * The amount of elapsed time or number of occurrences of a day of the week needed to satisfy a minimum stay requirement.
     *
     * @var int
     */
    protected $minStay;
    /**
     * The specific date for the minimum stay requirement.
     *
     * @var string
     */
    protected $minStayDate;
    /**
     * The time of day when return travel may commence.
     *
     * @var string
     */
    protected $returnTimeOfDay;
    /**
     * The unit of elapsed time or the day of the week applied to the MinStay value.
     *
     * @var string
     */
    protected $stayUnit;

    /**
     * The amount of elapsed time or number of occurrences of a day of the week needed to satisfy a minimum stay requirement.
     *
     * @return int
     */
    public function getMinStay(): ?int
    {
        return $this->minStay;
    }

    /**
     * The amount of elapsed time or number of occurrences of a day of the week needed to satisfy a minimum stay requirement.
     *
     * @param int $minStay
     *
     * @return self
     */
    public function setMinStay(?int $minStay): self
    {
        $this->minStay = $minStay;

        return $this;
    }

    /**
     * The specific date for the minimum stay requirement.
     *
     * @return string
     */
    public function getMinStayDate(): ?string
    {
        return $this->minStayDate;
    }

    /**
     * The specific date for the minimum stay requirement.
     *
     * @param string $minStayDate
     *
     * @return self
     */
    public function setMinStayDate(?string $minStayDate): self
    {
        $this->minStayDate = $minStayDate;

        return $this;
    }

    /**
     * The time of day when return travel may commence.
     *
     * @return string
     */
    public function getReturnTimeOfDay(): ?string
    {
        return $this->returnTimeOfDay;
    }

    /**
     * The time of day when return travel may commence.
     *
     * @param string $returnTimeOfDay
     *
     * @return self
     */
    public function setReturnTimeOfDay(?string $returnTimeOfDay): self
    {
        $this->returnTimeOfDay = $returnTimeOfDay;

        return $this;
    }

    /**
     * The unit of elapsed time or the day of the week applied to the MinStay value.
     *
     * @return string
     */
    public function getStayUnit(): ?string
    {
        return $this->stayUnit;
    }

    /**
     * The unit of elapsed time or the day of the week applied to the MinStay value.
     *
     * @param string $stayUnit
     *
     * @return self
     */
    public function setStayUnit(?string $stayUnit): self
    {
        $this->stayUnit = $stayUnit;

        return $this;
    }
}
