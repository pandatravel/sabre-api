<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemFlightQualifiersVendorPrefsAirline extends AbstractModel
{
    /**
     * "Code" is used to specify a particular vendor code.
     *
     * @var string
     */
    protected $code;

    /**
     * "Code" is used to specify a particular vendor code.
     *
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * "Code" is used to specify a particular vendor code.
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }
}
