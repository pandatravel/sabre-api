<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsFlightRestrictions extends AbstractModel
{
    /**
     * Avoid last flight of the day.
     *
     * @var bool
     */
    protected $avoidLastFlight;

    /**
     * Avoid last flight of the day.
     *
     * @return bool
     */
    public function getAvoidLastFlight(): ?bool
    {
        return $this->avoidLastFlight;
    }

    /**
     * Avoid last flight of the day.
     *
     * @param bool $avoidLastFlight
     *
     * @return self
     */
    public function setAvoidLastFlight(?bool $avoidLastFlight): self
    {
        $this->avoidLastFlight = $avoidLastFlight;

        return $this;
    }
}
