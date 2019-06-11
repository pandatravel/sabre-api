<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\SeatMap\Model;

class SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedJourneyData
{
    /**
     * @var mixed
     */
    protected $extensionPointSummary;
    /**
     * @var SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedJourneyDataJourneyFlightItem[]
     */
    protected $journeyFlight;

    /**
     * @return mixed
     */
    public function getExtensionPointSummary()
    {
        return $this->extensionPointSummary;
    }

    /**
     * @param mixed $extensionPointSummary
     *
     * @return self
     */
    public function setExtensionPointSummary($extensionPointSummary): self
    {
        $this->extensionPointSummary = $extensionPointSummary;

        return $this;
    }

    /**
     * @return SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedJourneyDataJourneyFlightItem[]
     */
    public function getJourneyFlight(): ?array
    {
        return $this->journeyFlight;
    }

    /**
     * @param SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedJourneyDataJourneyFlightItem[] $journeyFlight
     *
     * @return self
     */
    public function setJourneyFlight(?array $journeyFlight): self
    {
        $this->journeyFlight = $journeyFlight;

        return $this;
    }
}
