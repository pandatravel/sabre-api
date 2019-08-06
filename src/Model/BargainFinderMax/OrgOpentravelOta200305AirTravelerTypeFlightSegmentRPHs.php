<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305AirTravelerTypeFlightSegmentRPHs extends AbstractModel
{
    /**
     * @var string[]
     */
    protected $flightSegmentRPH;

    /**
     * @return string[]
     */
    public function getFlightSegmentRPH(): array
    {
        return $this->flightSegmentRPH;
    }

    /**
     * @param string[] $flightSegmentRPH
     *
     * @return self
     */
    public function setFlightSegmentRPH(array $flightSegmentRPH): self
    {
        $this->flightSegmentRPH = $flightSegmentRPH;

        return $this;
    }
}
