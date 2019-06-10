<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsAlternateDatesProcessing extends AbstractModel
{
    /**
     * @var bool
     */
    protected $calendarMode;
    /**
     * @var int
     */
    protected $numOptionsPerAlternateDate;

    /**
     * @return bool
     */
    public function getCalendarMode(): ?bool
    {
        return $this->calendarMode;
    }

    /**
     * @param bool $calendarMode
     *
     * @return self
     */
    public function setCalendarMode(?bool $calendarMode): self
    {
        $this->calendarMode = $calendarMode;

        return $this;
    }

    /**
     * @return int
     */
    public function getNumOptionsPerAlternateDate(): ?int
    {
        return $this->numOptionsPerAlternateDate;
    }

    /**
     * @param int $numOptionsPerAlternateDate
     *
     * @return self
     */
    public function setNumOptionsPerAlternateDate(?int $numOptionsPerAlternateDate): self
    {
        $this->numOptionsPerAlternateDate = $numOptionsPerAlternateDate;

        return $this;
    }
}
