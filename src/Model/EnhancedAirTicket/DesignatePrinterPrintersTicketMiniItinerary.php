<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class DesignatePrinterPrintersTicketMiniItinerary extends AbstractModel
{
    /**
     * "LNIATA" is used by ATB1, or ATB2 customers to also designate a mini itinerary printer at the same time they are designating their ticket printer.
     *
     * @var string
     */
    protected $lNIATA;

    /**
     * "LNIATA" is used by ATB1, or ATB2 customers to also designate a mini itinerary printer at the same time they are designating their ticket printer.
     *
     * @return string
     */
    public function getLNIATA(): ?string
    {
        return $this->lNIATA;
    }

    /**
     * "LNIATA" is used by ATB1, or ATB2 customers to also designate a mini itinerary printer at the same time they are designating their ticket printer.
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
