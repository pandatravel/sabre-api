<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class DesignatePrinterPrintersMiniItinerary extends AbstractModel
{
    /**
     * "LNIATA" is used to specify a mini itinerary printer address.
     *
     * @var string
     */
    protected $lNIATA;

    /**
     * "LNIATA" is used to specify a mini itinerary printer address.
     *
     * @return string
     */
    public function getLNIATA(): ?string
    {
        return $this->lNIATA;
    }

    /**
     * "LNIATA" is used to specify a mini itinerary printer address.
     *
     * @param string $lNIATA
     *
     * @return self
     */
    public function setLNIATA(?string $lNIATA): self
    {
        $this->lNIATA = $lNIATA;

        return $this;
    }
}
