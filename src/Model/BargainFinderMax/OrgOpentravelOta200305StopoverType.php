<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305StopoverType extends AbstractModel
{
    /**
     * This date should be of the form YYYY-MM-DDTHH:MM:SS.
     *
     * @var string
     */
    protected $departureDateTime;
    /**
     * This should be of the form HHMMHHMM.
     *
     * @var string
     */
    protected $departureWindow;
    /**
     * Stopover point - for example, air uses the IATA 3 letter code.
     *
     * @var OrgOpentravelOta200305StopoverTypeStopoverPoint
     */
    protected $stopoverPoint;

    /**
     * This date should be of the form YYYY-MM-DDTHH:MM:SS.
     *
     * @return string
     */
    public function getDepartureDateTime(): string
    {
        return $this->departureDateTime;
    }

    /**
     * This date should be of the form YYYY-MM-DDTHH:MM:SS.
     *
     * @param string $departureDateTime
     *
     * @return self
     */
    public function setDepartureDateTime(string $departureDateTime): self
    {
        $this->departureDateTime = $departureDateTime;

        return $this;
    }

    /**
     * This should be of the form HHMMHHMM.
     *
     * @return string
     */
    public function getDepartureWindow(): string
    {
        return $this->departureWindow;
    }

    /**
     * This should be of the form HHMMHHMM.
     *
     * @param string $departureWindow
     *
     * @return self
     */
    public function setDepartureWindow(string $departureWindow): self
    {
        $this->departureWindow = $departureWindow;

        return $this;
    }

    /**
     * Stopover point - for example, air uses the IATA 3 letter code.
     *
     * @return OrgOpentravelOta200305StopoverTypeStopoverPoint
     */
    public function getStopoverPoint(): OrgOpentravelOta200305StopoverTypeStopoverPoint
    {
        return $this->stopoverPoint;
    }

    /**
     * Stopover point - for example, air uses the IATA 3 letter code.
     *
     * @param OrgOpentravelOta200305StopoverTypeStopoverPoint $stopoverPoint
     *
     * @return self
     */
    public function setStopoverPoint(OrgOpentravelOta200305StopoverTypeStopoverPoint $stopoverPoint): self
    {
        $this->stopoverPoint = $stopoverPoint;

        return $this;
    }
}
