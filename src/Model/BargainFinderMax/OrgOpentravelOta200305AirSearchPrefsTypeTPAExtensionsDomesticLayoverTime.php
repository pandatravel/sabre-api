<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsDomesticLayoverTime extends AbstractModel
{
    /**
     * @var float
     */
    protected $hours;

    /**
     * @return float
     */
    public function getHours(): ?float
    {
        return $this->hours;
    }

    /**
     * @param float $hours
     *
     * @return self
     */
    public function setHours(?float $hours): self
    {
        $this->hours = $hours;

        return $this;
    }
}
