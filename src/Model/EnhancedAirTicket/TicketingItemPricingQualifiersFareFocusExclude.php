<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemPricingQualifiersFareFocusExclude extends AbstractModel
{
    /**
     * "FareFocusExclude" is used to exclude fare focus fares based on business rules of the agency.
     *
     * @var bool
     */
    protected $ind;

    /**
     * "FareFocusExclude" is used to exclude fare focus fares based on business rules of the agency.
     *
     * @return bool
     */
    public function getInd(): ?bool
    {
        return $this->ind;
    }

    /**
     * "FareFocusExclude" is used to exclude fare focus fares based on business rules of the agency.
     *
     * @param bool $ind
     *
     * @return self
     */
    public function setInd(?bool $ind): self
    {
        $this->ind = $ind;

        return $this;
    }
}
