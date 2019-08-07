<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsDiversityParametersTimeOfDayDistributionTimeOfDayRange extends AbstractModel
{
    /**
     * Beginning of the TimeOfDayRange in HHMM format.
     *
     * @var string
     */
    protected $begin;
    /**
     * End of the TimeOfDayRange in HHMM format.
     *
     * @var string
     */
    protected $end;
    /**
     * Defines how many percent options should be in the TimeOfDayRange.
     *
     * @var int
     */
    protected $percentage;

    /**
     * Beginning of the TimeOfDayRange in HHMM format.
     *
     * @return string
     */
    public function getBegin(): ?string
    {
        return $this->begin;
    }

    /**
     * Beginning of the TimeOfDayRange in HHMM format.
     *
     * @param string $begin
     *
     * @return self
     */
    public function setBegin(?string $begin): self
    {
        $this->begin = $begin;

        return $this;
    }

    /**
     * End of the TimeOfDayRange in HHMM format.
     *
     * @return string
     */
    public function getEnd(): ?string
    {
        return $this->end;
    }

    /**
     * End of the TimeOfDayRange in HHMM format.
     *
     * @param string $end
     *
     * @return self
     */
    public function setEnd(?string $end): self
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Defines how many percent options should be in the TimeOfDayRange.
     *
     * @return int
     */
    public function getPercentage(): ?int
    {
        return $this->percentage;
    }

    /**
     * Defines how many percent options should be in the TimeOfDayRange.
     *
     * @param int $percentage
     *
     * @return self
     */
    public function setPercentage(?int $percentage): self
    {
        $this->percentage = $percentage;

        return $this;
    }
}
