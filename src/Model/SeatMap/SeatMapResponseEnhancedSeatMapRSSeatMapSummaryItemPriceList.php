<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\SeatMap\Model;

class SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemPriceList
{
    /**
     * @var SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemPriceListPriceTypeDetailItem[]
     */
    protected $priceTypeDetail;

    /**
     * @return SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemPriceListPriceTypeDetailItem[]
     */
    public function getPriceTypeDetail(): ?array
    {
        return $this->priceTypeDetail;
    }

    /**
     * @param SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemPriceListPriceTypeDetailItem[] $priceTypeDetail
     *
     * @return self
     */
    public function setPriceTypeDetail(?array $priceTypeDetail): self
    {
        $this->priceTypeDetail = $priceTypeDetail;

        return $this;
    }
}