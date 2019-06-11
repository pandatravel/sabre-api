<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class DesignatePrinterPrintersTicketRemote extends AbstractModel
{
    /**
     * "LNIATA" is used by customers to designate an ATB or ATB2 ticket printer along with a remote printer.
     *
     * @var string
     */
    protected $lNIATA;

    /**
     * "LNIATA" is used by customers to designate an ATB or ATB2 ticket printer along with a remote printer.
     *
     * @return string
     */
    public function getLNIATA(): ?string
    {
        return $this->lNIATA;
    }

    /**
     * "LNIATA" is used by customers to designate an ATB or ATB2 ticket printer along with a remote printer.
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
