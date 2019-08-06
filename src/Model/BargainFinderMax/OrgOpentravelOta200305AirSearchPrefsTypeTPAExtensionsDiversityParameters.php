<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsDiversityParameters extends AbstractModel
{
    /**
     * Defines how many additional non-stop options should be added to the response. Overrides @Percentage.
     *
     * @var int
     */
    protected $additionalNonStopsNumber;
    /**
     * Defines how many additional non-stop options should be added to the response as a percentage of the requested number of options.
     *
     * @var int
     */
    protected $additionalNonStopsPercentage;
    /**
     * Defines the requested ratio of inbounds to outbounds in the response.
     *
     * @var int
     */
    protected $inboundOutboundPairing;
    /**
     * Defines how the options in the response should be distributed between certain departure time of day ranges. All defined TimeOfDayRanges need to cover the whole day and the sum of all Percentages needs to equal 100.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsDiversityParametersTimeOfDayDistribution
     */
    protected $timeOfDayDistribution;
    /**
     * Defines how important various parameter options are in the response. Sum of all weightings needs to equal 10.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsDiversityParametersWeightings
     */
    protected $weightings;

    /**
     * Defines how many additional non-stop options should be added to the response. Overrides @Percentage.
     *
     * @return int
     */
    public function getAdditionalNonStopsNumber(): int
    {
        return $this->additionalNonStopsNumber;
    }

    /**
     * Defines how many additional non-stop options should be added to the response. Overrides @Percentage.
     *
     * @param int $additionalNonStopsNumber
     *
     * @return self
     */
    public function setAdditionalNonStopsNumber(int $additionalNonStopsNumber): self
    {
        $this->additionalNonStopsNumber = $additionalNonStopsNumber;

        return $this;
    }

    /**
     * Defines how many additional non-stop options should be added to the response as a percentage of the requested number of options.
     *
     * @return int
     */
    public function getAdditionalNonStopsPercentage(): int
    {
        return $this->additionalNonStopsPercentage;
    }

    /**
     * Defines how many additional non-stop options should be added to the response as a percentage of the requested number of options.
     *
     * @param int $additionalNonStopsPercentage
     *
     * @return self
     */
    public function setAdditionalNonStopsPercentage(int $additionalNonStopsPercentage): self
    {
        $this->additionalNonStopsPercentage = $additionalNonStopsPercentage;

        return $this;
    }

    /**
     * Defines the requested ratio of inbounds to outbounds in the response.
     *
     * @return int
     */
    public function getInboundOutboundPairing(): int
    {
        return $this->inboundOutboundPairing;
    }

    /**
     * Defines the requested ratio of inbounds to outbounds in the response.
     *
     * @param int $inboundOutboundPairing
     *
     * @return self
     */
    public function setInboundOutboundPairing(int $inboundOutboundPairing): self
    {
        $this->inboundOutboundPairing = $inboundOutboundPairing;

        return $this;
    }

    /**
     * Defines how the options in the response should be distributed between certain departure time of day ranges. All defined TimeOfDayRanges need to cover the whole day and the sum of all Percentages needs to equal 100.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsDiversityParametersTimeOfDayDistribution
     */
    public function getTimeOfDayDistribution(): OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsDiversityParametersTimeOfDayDistribution
    {
        return $this->timeOfDayDistribution;
    }

    /**
     * Defines how the options in the response should be distributed between certain departure time of day ranges. All defined TimeOfDayRanges need to cover the whole day and the sum of all Percentages needs to equal 100.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsDiversityParametersTimeOfDayDistribution $timeOfDayDistribution
     *
     * @return self
     */
    public function setTimeOfDayDistribution(OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsDiversityParametersTimeOfDayDistribution $timeOfDayDistribution): self
    {
        $this->timeOfDayDistribution = $timeOfDayDistribution;

        return $this;
    }

    /**
     * Defines how important various parameter options are in the response. Sum of all weightings needs to equal 10.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsDiversityParametersWeightings
     */
    public function getWeightings(): OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsDiversityParametersWeightings
    {
        return $this->weightings;
    }

    /**
     * Defines how important various parameter options are in the response. Sum of all weightings needs to equal 10.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsDiversityParametersWeightings $weightings
     *
     * @return self
     */
    public function setWeightings(OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsDiversityParametersWeightings $weightings): self
    {
        $this->weightings = $weightings;

        return $this;
    }
}
