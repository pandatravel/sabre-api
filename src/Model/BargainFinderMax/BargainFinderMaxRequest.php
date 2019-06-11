<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class BargainFinderMaxRequest extends AbstractModel
{
    /**
     * The Low Fare Search Request message requests priced itinerary options for
     * flights between specific city pairs on specific dates for specific
     * numbers and types of passengers. Optional request information can
     * include: - Time / Time Window - Connecting cities. - Client Preferences
     * (airlines, cabin, flight types etc.) The Low Fare Search request contains
     * similar information to a Low Fare Search entry on an airline CRS or GDS.
     *
     * @var BargainFinderMaxRequestOTAAirLowFareSearchRQ
     */
    protected $oTAAirLowFareSearchRQ;

    /**
     * The Low Fare Search Request message requests priced itinerary options for
     * flights between specific city pairs on specific dates for specific
     * numbers and types of passengers. Optional request information can
     * include: - Time / Time Window - Connecting cities. - Client Preferences
     * (airlines, cabin, flight types etc.) The Low Fare Search request contains
     * similar information to a Low Fare Search entry on an airline CRS or GDS.
     *
     * @return BargainFinderMaxRequestOTAAirLowFareSearchRQ
     */
    public function getOTAAirLowFareSearchRQ(): ?BargainFinderMaxRequestOTAAirLowFareSearchRQ
    {
        return $this->oTAAirLowFareSearchRQ;
    }

    /**
     * The Low Fare Search Request message requests priced itinerary options for
     * flights between specific city pairs on specific dates for specific
     * numbers and types of passengers. Optional request information can
     * include: - Time / Time Window - Connecting cities. - Client Preferences
     * (airlines, cabin, flight types etc.) The Low Fare Search request contains
     * similar information to a Low Fare Search entry on an airline CRS or GDS.
     *
     * @param BargainFinderMaxRequestOTAAirLowFareSearchRQ $oTAAirLowFareSearchRQ
     *
     * @return self
     */
    public function setOTAAirLowFareSearchRQ(?BargainFinderMaxRequestOTAAirLowFareSearchRQ $oTAAirLowFareSearchRQ): self
    {
        $this->oTAAirLowFareSearchRQ = $oTAAirLowFareSearchRQ;

        return $this;
    }
}
