<?php

namespace Ammonkc\SabreApi\Model\InstaFlightsSearch;

use Ammonkc\SabreApi\AbstractModel;

class AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemOnTimePerformance extends AbstractModel
{
    /**
     * IATA Data Element Identifier (DEI) for ontime performance rating.

    It is the probability that a flight will not be delayed.
    If an airline files DEI502, the return value is a 3-digit percentage.
    A value of N or NNN indicates that the ontime performance value is not calculated.

     *
     * @var string
     */
    protected $percentage;
    /**
     * IATA Data Element Identifier (DEI) for ontime performance rating.
    It is the probability that a flight will not be delayed.

    If an airline files DEI502, the return value is a 3-digit percentage.

    A value of 'N' or 'NNN' indicates that the ontime performance value is not calculated.

     *
     * @var string
     */
    protected $level;

    /**
     * IATA Data Element Identifier (DEI) for ontime performance rating.

    It is the probability that a flight will not be delayed.
    If an airline files DEI502, the return value is a 3-digit percentage.
    A value of N or NNN indicates that the ontime performance value is not calculated.

     *
     * @return string
     */
    public function getPercentage(): ?string
    {
        return $this->percentage;
    }

    /**
     * IATA Data Element Identifier (DEI) for ontime performance rating.

    It is the probability that a flight will not be delayed.
    If an airline files DEI502, the return value is a 3-digit percentage.
    A value of N or NNN indicates that the ontime performance value is not calculated.

     *
     * @param string $percentage
     *
     * @return self
     */
    public function setPercentage(?string $percentage): self
    {
        $this->percentage = $percentage;

        return $this;
    }

    /**
     * IATA Data Element Identifier (DEI) for ontime performance rating.
    It is the probability that a flight will not be delayed.

    If an airline files DEI502, the return value is a 3-digit percentage.

    A value of 'N' or 'NNN' indicates that the ontime performance value is not calculated.

     *
     * @return string
     */
    public function getLevel(): ?string
    {
        return $this->level;
    }

    /**
     * IATA Data Element Identifier (DEI) for ontime performance rating.
    It is the probability that a flight will not be delayed.

    If an airline files DEI502, the return value is a 3-digit percentage.

    A value of 'N' or 'NNN' indicates that the ontime performance value is not calculated.

     *
     * @param string $level
     *
     * @return self
     */
    public function setLevel(?string $level): self
    {
        $this->level = $level;

        return $this;
    }
}
