<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\SeatMap\Model;

class SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemCabinItemRowItemSeatItemFacilitiesItem
{
    /**
     * @var SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemCabinItemRowItemSeatItemFacilitiesItemDetail
     */
    protected $detail;

    /**
     * @return SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemCabinItemRowItemSeatItemFacilitiesItemDetail
     */
    public function getDetail(): ?SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemCabinItemRowItemSeatItemFacilitiesItemDetail
    {
        return $this->detail;
    }

    /**
     * @param SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemCabinItemRowItemSeatItemFacilitiesItemDetail $detail
     *
     * @return self
     */
    public function setDetail(?SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemCabinItemRowItemSeatItemFacilitiesItemDetail $detail): self
    {
        $this->detail = $detail;

        return $this;
    }
}
