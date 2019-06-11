<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemMiscQualifiersTicket extends AbstractModel
{
    /**
     * "Action" is used to specify an action code.

    Please note that this qualifier is only applicable to Sabre Sonic-hosted carriers.

     *
     * @var string
     */
    protected $action;
    /**
     * "Type" is used to specify the type of ticket to issue.
    Acceptable values for Type: ETR = electronic ticket (default), EMD= Electronic Miscellaneous Document, XETR = paper ticket, VCR = paper ticket (for airline use only).
     *
     * @var string
     */
    protected $type;

    /**
     * "Action" is used to specify an action code.

    Please note that this qualifier is only applicable to Sabre Sonic-hosted carriers.

     *
     * @return string
     */
    public function getAction(): ?string
    {
        return $this->action;
    }

    /**
     * "Action" is used to specify an action code.

    Please note that this qualifier is only applicable to Sabre Sonic-hosted carriers.

     *
     * @param string $action
     *
     * @return self
     */
    public function setAction(?string $action): self
    {
        $this->action = $action;

        return $this;
    }

    /**
     * "Type" is used to specify the type of ticket to issue.
    Acceptable values for Type: ETR = electronic ticket (default), EMD= Electronic Miscellaneous Document, XETR = paper ticket, VCR = paper ticket (for airline use only).
     *
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * "Type" is used to specify the type of ticket to issue.
    Acceptable values for Type: ETR = electronic ticket (default), EMD= Electronic Miscellaneous Document, XETR = paper ticket, VCR = paper ticket (for airline use only).
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
