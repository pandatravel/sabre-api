<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsDiversityParametersTimeOfDayDistribution extends AbstractModel
{
    /**
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsDiversityParametersTimeOfDayDistributionTimeOfDayRange[]
     */
    protected $timeOfDayRange;

    /**
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsDiversityParametersTimeOfDayDistributionTimeOfDayRange[]
     */
    public function getTimeOfDayRange(): ?array
    {
        return $this->timeOfDayRange;
    }

    /**
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsDiversityParametersTimeOfDayDistributionTimeOfDayRange[] $timeOfDayRange
     *
     * @return self
     */
    public function setTimeOfDayRange(?array $timeOfDayRange): self
    {
        $this->timeOfDayRange = $timeOfDayRange;

        return $this;
    }
}
