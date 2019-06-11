<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemFlightQualifiers extends AbstractModel
{
    /**
     * @var TicketingItemFlightQualifiersVendorPrefs
     */
    protected $vendorPrefs;

    /**
     * @return TicketingItemFlightQualifiersVendorPrefs
     */
    public function getVendorPrefs(): ?TicketingItemFlightQualifiersVendorPrefs
    {
        return $this->vendorPrefs;
    }

    /**
     * @param TicketingItemFlightQualifiersVendorPrefs $vendorPrefs
     *
     * @return self
     */
    public function setVendorPrefs(?TicketingItemFlightQualifiersVendorPrefs $vendorPrefs): self
    {
        $this->vendorPrefs = $vendorPrefs;

        return $this;
    }
}
