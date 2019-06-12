<?php

namespace Ammonkc\SabreApi\Model\OrderManagement;

use Ammonkc\SabreApi\AbstractModel;

class PartySender extends AbstractModel
{
    /**
     * Contains details of the Travel Agency.
     *
     * @var PartyTravelAgency
     */
    protected $travelAgency;

    /**
     * Contains details of the Travel Agency.
     *
     * @return PartyTravelAgency
     */
    public function getTravelAgency(): ?PartyTravelAgency
    {
        return $this->travelAgency;
    }

    /**
     * Contains details of the Travel Agency.
     *
     * @param PartyTravelAgency $travelAgency
     *
     * @return self
     */
    public function setTravelAgency(?PartyTravelAgency $travelAgency): self
    {
        $this->travelAgency = $travelAgency;

        return $this;
    }
}
