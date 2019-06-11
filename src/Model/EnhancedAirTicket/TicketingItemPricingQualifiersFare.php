<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemPricingQualifiersFare extends AbstractModel
{
    /**
     * "Type" is used to specify a fare type.  Acceptable values are "NL" for normal fare, "EX" for special fare, and "IT" for inclusive tour.
     *
     * @var string
     */
    protected $type;

    /**
     * "Type" is used to specify a fare type.  Acceptable values are "NL" for normal fare, "EX" for special fare, and "IT" for inclusive tour.
     *
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * "Type" is used to specify a fare type.  Acceptable values are "NL" for normal fare, "EX" for special fare, and "IT" for inclusive tour.
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
