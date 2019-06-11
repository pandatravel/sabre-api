<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class Itinerary extends AbstractModel
{
    /**
     * "ID" is used to specify a record locator.
     *
     * @var string
     */
    protected $iD;

    /**
     * "ID" is used to specify a record locator.
     *
     * @return string
     */
    public function getID(): ?string
    {
        return $this->iD;
    }

    /**
     * "ID" is used to specify a record locator.
     *
     * @param string $iD
     *
     * @return self
     */
    public function setID(?string $iD): self
    {
        $this->iD = $iD;

        return $this;
    }
}
