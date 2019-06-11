<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class DesignatePrinterPrintersReport extends AbstractModel
{
    /**
     * "LNIATA" is used to specify a report printer address.

    Please note that the user account attempting to designate to a report printer must be signed in under duty code 9.

    To set duty code 9 the client application can utilize the ContextChangeLLSRQ service.

     *
     * @var string
     */
    protected $lNIATA;

    /**
     * "LNIATA" is used to specify a report printer address.

    Please note that the user account attempting to designate to a report printer must be signed in under duty code 9.

    To set duty code 9 the client application can utilize the ContextChangeLLSRQ service.

     *
     * @return string
     */
    public function getLNIATA(): ?string
    {
        return $this->lNIATA;
    }

    /**
     * "LNIATA" is used to specify a report printer address.

    Please note that the user account attempting to designate to a report printer must be signed in under duty code 9.

    To set duty code 9 the client application can utilize the ContextChangeLLSRQ service.

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
