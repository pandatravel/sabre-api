<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemMiscQualifiersCertificateItem extends AbstractModel
{
    /**
     * "Number" is used to specify a ticket number.

    Please note that this qualifier is only applicable to Sabre Sonic-hosted carriers.

     *
     * @var string
     */
    protected $number;

    /**
     * "Number" is used to specify a ticket number.

    Please note that this qualifier is only applicable to Sabre Sonic-hosted carriers.

     *
     * @return string
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }

    /**
     * "Number" is used to specify a ticket number.

    Please note that this qualifier is only applicable to Sabre Sonic-hosted carriers.

     *
     * @param string $number
     *
     * @return self
     */
    public function setNumber(?string $number): self
    {
        $this->number = $number;

        return $this;
    }
}
