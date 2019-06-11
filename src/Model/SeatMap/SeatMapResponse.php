<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\SeatMap\Model;

class SeatMapResponse
{
    /**
     * @var SeatMapResponseLinksItem[]
     */
    protected $links;
    /**
     * @var SeatMapResponseEnhancedSeatMapRS
     */
    protected $enhancedSeatMapRS;

    /**
     * @return SeatMapResponseLinksItem[]
     */
    public function getLinks(): ?array
    {
        return $this->links;
    }

    /**
     * @param SeatMapResponseLinksItem[] $links
     *
     * @return self
     */
    public function setLinks(?array $links): self
    {
        $this->links = $links;

        return $this;
    }

    /**
     * @return SeatMapResponseEnhancedSeatMapRS
     */
    public function getEnhancedSeatMapRS(): ?SeatMapResponseEnhancedSeatMapRS
    {
        return $this->enhancedSeatMapRS;
    }

    /**
     * @param SeatMapResponseEnhancedSeatMapRS $enhancedSeatMapRS
     *
     * @return self
     */
    public function setEnhancedSeatMapRS(?SeatMapResponseEnhancedSeatMapRS $enhancedSeatMapRS): self
    {
        $this->enhancedSeatMapRS = $enhancedSeatMapRS;

        return $this;
    }
}