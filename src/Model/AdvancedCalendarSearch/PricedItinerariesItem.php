<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\AdvancedCalendarSearch;

use Ammonkc\SabreApi\AbstractModel;

class PricedItinerariesItem extends AbstractModel
{
    /**
     * @var PricedItinerariesItemPricedItinerary
     */
    protected $pricedItinerary;

    /**
     * @return PricedItinerariesItemPricedItinerary
     */
    public function getPricedItinerary(): ?PricedItinerariesItemPricedItinerary
    {
        return $this->pricedItinerary;
    }

    /**
     * @param PricedItinerariesItemPricedItinerary $pricedItinerary
     *
     * @return self
     */
    public function setPricedItinerary(?PricedItinerariesItemPricedItinerary $pricedItinerary): self
    {
        $this->pricedItinerary = $pricedItinerary;

        return $this;
    }
}
