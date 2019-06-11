<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemFlightQualifiersVendorPrefs extends AbstractModel
{
    /**
     * @var TicketingItemFlightQualifiersVendorPrefsAirline
     */
    protected $airline;

    /**
     * @return TicketingItemFlightQualifiersVendorPrefsAirline
     */
    public function getAirline(): ?TicketingItemFlightQualifiersVendorPrefsAirline
    {
        return $this->airline;
    }

    /**
     * @param TicketingItemFlightQualifiersVendorPrefsAirline $airline
     *
     * @return self
     */
    public function setAirline(?TicketingItemFlightQualifiersVendorPrefsAirline $airline): self
    {
        $this->airline = $airline;

        return $this;
    }
}
