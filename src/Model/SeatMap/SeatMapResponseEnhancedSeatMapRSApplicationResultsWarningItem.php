<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\SeatMap\Model;

class SeatMapResponseEnhancedSeatMapRSApplicationResultsWarningItem
{
    /**
     * An indication of the source of error when processing the request.
     *
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $timeStamp;
    /**
     * @var SeatMapResponseEnhancedSeatMapRSApplicationResultsWarningItemSystemSpecificResultsItem[]
     */
    protected $systemSpecificResults;

    /**
     * An indication of the source of error when processing the request.
     *
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * An indication of the source of error when processing the request.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getTimeStamp(): ?string
    {
        return $this->timeStamp;
    }

    /**
     * @param string $timeStamp
     *
     * @return self
     */
    public function setTimeStamp(?string $timeStamp): self
    {
        $this->timeStamp = $timeStamp;

        return $this;
    }

    /**
     * @return SeatMapResponseEnhancedSeatMapRSApplicationResultsWarningItemSystemSpecificResultsItem[]
     */
    public function getSystemSpecificResults(): ?array
    {
        return $this->systemSpecificResults;
    }

    /**
     * @param SeatMapResponseEnhancedSeatMapRSApplicationResultsWarningItemSystemSpecificResultsItem[] $systemSpecificResults
     *
     * @return self
     */
    public function setSystemSpecificResults(?array $systemSpecificResults): self
    {
        $this->systemSpecificResults = $systemSpecificResults;

        return $this;
    }
}
