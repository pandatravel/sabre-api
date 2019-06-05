<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

class OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsDiversityParametersTimeOfDayDistribution
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
