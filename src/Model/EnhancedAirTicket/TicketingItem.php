<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItem extends AbstractModel
{
    /**
     * @var TicketingItemFlightQualifiers
     */
    protected $flightQualifiers;
    /**
     * @var TicketingItemFOPQualifiers
     */
    protected $fOPQualifiers;
    /**
     * @var TicketingItemMiscQualifiers
     */
    protected $miscQualifiers;
    /**
     * @var TicketingItemPricingQualifiers
     */
    protected $pricingQualifiers;

    /**
     * @return TicketingItemFlightQualifiers
     */
    public function getFlightQualifiers(): ?TicketingItemFlightQualifiers
    {
        return $this->flightQualifiers;
    }

    /**
     * @param TicketingItemFlightQualifiers $flightQualifiers
     *
     * @return self
     */
    public function setFlightQualifiers(?TicketingItemFlightQualifiers $flightQualifiers): self
    {
        $this->flightQualifiers = $flightQualifiers;

        return $this;
    }

    /**
     * @return TicketingItemFOPQualifiers
     */
    public function getFOPQualifiers(): ?TicketingItemFOPQualifiers
    {
        return $this->fOPQualifiers;
    }

    /**
     * @param TicketingItemFOPQualifiers $fOPQualifiers
     *
     * @return self
     */
    public function setFOPQualifiers(?TicketingItemFOPQualifiers $fOPQualifiers): self
    {
        $this->fOPQualifiers = $fOPQualifiers;

        return $this;
    }

    /**
     * @return TicketingItemMiscQualifiers
     */
    public function getMiscQualifiers(): ?TicketingItemMiscQualifiers
    {
        return $this->miscQualifiers;
    }

    /**
     * @param TicketingItemMiscQualifiers $miscQualifiers
     *
     * @return self
     */
    public function setMiscQualifiers(?TicketingItemMiscQualifiers $miscQualifiers): self
    {
        $this->miscQualifiers = $miscQualifiers;

        return $this;
    }

    /**
     * @return TicketingItemPricingQualifiers
     */
    public function getPricingQualifiers(): ?TicketingItemPricingQualifiers
    {
        return $this->pricingQualifiers;
    }

    /**
     * @param TicketingItemPricingQualifiers $pricingQualifiers
     *
     * @return self
     */
    public function setPricingQualifiers(?TicketingItemPricingQualifiers $pricingQualifiers): self
    {
        $this->pricingQualifiers = $pricingQualifiers;

        return $this;
    }
}
