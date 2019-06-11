<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemPricingQualifiersItineraryOptionsSideTrip extends AbstractModel
{
    /**
     * Side trip EndNumber. Used to select a range of side trips.
     *
     * @var int
     */
    protected $endNumber;
    /**
     * Side trip Number. Used to select a specific side trip.
     *
     * @var int
     */
    protected $number;

    /**
     * Side trip EndNumber. Used to select a range of side trips.
     *
     * @return int
     */
    public function getEndNumber(): ?int
    {
        return $this->endNumber;
    }

    /**
     * Side trip EndNumber. Used to select a range of side trips.
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
     * Side trip Number. Used to select a specific side trip.
     *
     * @return int
     */
    public function getNumber(): ?int
    {
        return $this->number;
    }

    /**
     * Side trip Number. Used to select a specific side trip.
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
