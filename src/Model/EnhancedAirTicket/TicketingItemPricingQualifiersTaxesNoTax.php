<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemPricingQualifiersTaxesNoTax extends AbstractModel
{
    /**
     * "Ind" is used to specify whether or not to exempt all taxes during EMD issuance.
     *
     * @var bool
     */
    protected $ind;

    /**
     * "Ind" is used to specify whether or not to exempt all taxes during EMD issuance.
     *
     * @return bool
     */
    public function getInd(): ?bool
    {
        return $this->ind;
    }

    /**
     * "Ind" is used to specify whether or not to exempt all taxes during EMD issuance.
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
