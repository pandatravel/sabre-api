<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumTripsWithRouting extends AbstractModel
{
    /**
     * @var float
     */
    protected $number;

    /**
     * @return float
     */
    public function getNumber(): float
    {
        return $this->number;
    }

    /**
     * @param float $number
     *
     * @return self
     */
    public function setNumber(float $number): self
    {
        $this->number = $number;

        return $this;
    }
}
