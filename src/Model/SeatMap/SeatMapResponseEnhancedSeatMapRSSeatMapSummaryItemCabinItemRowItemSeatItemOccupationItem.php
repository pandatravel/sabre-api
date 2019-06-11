<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\SeatMap\Model;

class SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemCabinItemRowItemSeatItemOccupationItem
{
    /**
     * @var SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemCabinItemRowItemSeatItemOccupationItemDetail
     */
    protected $detail;

    /**
     * @return SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemCabinItemRowItemSeatItemOccupationItemDetail
     */
    public function getDetail(): ?SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemCabinItemRowItemSeatItemOccupationItemDetail
    {
        return $this->detail;
    }

    /**
     * @param SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemCabinItemRowItemSeatItemOccupationItemDetail $detail
     *
     * @return self
     */
    public function setDetail(?SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemCabinItemRowItemSeatItemOccupationItemDetail $detail): self
    {
        $this->detail = $detail;

        return $this;
    }
}