<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemPricingQualifiersValidityDatesItemSegmentItem extends AbstractModel
{
    /**
     * "EndNumber" is used to specify a range of relevant itinerary segments.
     *
     * @var int
     */
    protected $endNumber;
    /**
     * "Number" is used to specify a single itinerary segment.
     *
     * @var int
     */
    protected $number;

    /**
     * "EndNumber" is used to specify a range of relevant itinerary segments.
     *
     * @return int
     */
    public function getEndNumber(): ?int
    {
        return $this->endNumber;
    }

    /**
     * "EndNumber" is used to specify a range of relevant itinerary segments.
     *
     * @param int $endNumber
     *
     * @return self
     */
    public function setEndNumber(?int $endNumber): self
    {
        $this->endNumber = $endNumber;

        return $this;
    }

    /**
     * "Number" is used to specify a single itinerary segment.
     *
     * @return int
     */
    public function getNumber(): ?int
    {
        return $this->number;
    }

    /**
     * "Number" is used to specify a single itinerary segment.
     *
     * @param int $number
     *
     * @return self
     */
    public function setNumber(?int $number): self
    {
        $this->number = $number;

        return $this;
    }
}
