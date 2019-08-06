<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsAlternateAirportMileage extends AbstractModel
{
    /**
     * @var bool
     */
    protected $allowBorderCross;
    /**
     * Maximum allowed number of miles from desired airport.
     *
     * @var string
     */
    protected $number;

    /**
     * @return bool
     */
    public function getAllowBorderCross(): bool
    {
        return $this->allowBorderCross;
    }

    /**
     * @param bool $allowBorderCross
     *
     * @return self
     */
    public function setAllowBorderCross(bool $allowBorderCross): self
    {
        $this->allowBorderCross = $allowBorderCross;

        return $this;
    }

    /**
     * Maximum allowed number of miles from desired airport.
     *
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * Maximum allowed number of miles from desired airport.
     *
     * @param string $number
     *
     * @return self
     */
    public function setNumber(string $number): self
    {
        $this->number = $number;

        return $this;
    }
}
