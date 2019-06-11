<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemPricingQualifiersItineraryOptions extends AbstractModel
{
    /**
     * @var TicketingItemPricingQualifiersItineraryOptionsSegmentSelectItem[]
     */
    protected $segmentSelect;
    /**
     * "SideTrip" is used to instruct the system to price the specified itinerary segments as a side trip.
     *
     * @var TicketingItemPricingQualifiersItineraryOptionsSideTrip
     */
    protected $sideTrip;

    /**
     * @return TicketingItemPricingQualifiersItineraryOptionsSegmentSelectItem[]
     */
    public function getSegmentSelect(): ?array
    {
        return $this->segmentSelect;
    }

    /**
     * @param TicketingItemPricingQualifiersItineraryOptionsSegmentSelectItem[] $segmentSelect
     *
     * @return self
     */
    public function setSegmentSelect(?array $segmentSelect): self
    {
        $this->segmentSelect = $segmentSelect;

        return $this;
    }

    /**
     * "SideTrip" is used to instruct the system to price the specified itinerary segments as a side trip.
     *
     * @return TicketingItemPricingQualifiersItineraryOptionsSideTrip
     */
    public function getSideTrip(): ?TicketingItemPricingQualifiersItineraryOptionsSideTrip
    {
        return $this->sideTrip;
    }

    /**
     * "SideTrip" is used to instruct the system to price the specified itinerary segments as a side trip.
     *
     * @param TicketingItemPricingQualifiersItineraryOptionsSideTrip $sideTrip
     *
     * @return self
     */
    public function setSideTrip(?TicketingItemPricingQualifiersItineraryOptionsSideTrip $sideTrip): self
    {
        $this->sideTrip = $sideTrip;

        return $this;
    }
}
