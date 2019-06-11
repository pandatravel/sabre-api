<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPTaxes extends AbstractModel
{
    /**
     * @var TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPTaxesTax
     */
    protected $tax;

    /**
     * @return TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPTaxesTax
     */
    public function getTax(): ?TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPTaxesTax
    {
        return $this->tax;
    }

    /**
     * @param TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPTaxesTax $tax
     *
     * @return self
     */
    public function setTax(?TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPTaxesTax $tax): self
    {
        $this->tax = $tax;

        return $this;
    }
}
