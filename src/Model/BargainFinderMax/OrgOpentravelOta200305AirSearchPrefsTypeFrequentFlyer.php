<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305AirSearchPrefsTypeFrequentFlyer extends AbstractModel
{
    /**
     * Airline Carrier Code.
     *
     * @var string
     */
    protected $airlineCode;
    /**
     * Frequent Flyer Status.
     *
     * @var float
     */
    protected $status;

    /**
     * Airline Carrier Code.
     *
     * @return string
     */
    public function getAirlineCode(): ?string
    {
        return $this->airlineCode;
    }

    /**
     * Airline Carrier Code.
     *
     * @param string $airlineCode
     *
     * @return self
     */
    public function setAirlineCode(?string $airlineCode): self
    {
        $this->airlineCode = $airlineCode;

        return $this;
    }

    /**
     * Frequent Flyer Status.
     *
     * @return float
     */
    public function getStatus(): ?float
    {
        return $this->status;
    }

    /**
     * Frequent Flyer Status.
     *
     * @param float $status
     *
     * @return self
     */
    public function setStatus(?float $status): self
    {
        $this->status = $status;

        return $this;
    }
}
