<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOPTaxes extends AbstractModel
{
    /**
     * @var TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOPTaxesTax
     */
    protected $tax;

    /**
     * @return TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOPTaxesTax
     */
    public function getTax(): ?TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOPTaxesTax
    {
        return $this->tax;
    }

    /**
     * @param TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOPTaxesTax $tax
     *
     * @return self
     */
    public function setTax(?TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOPTaxesTax $tax): self
    {
        $this->tax = $tax;

        return $this;
    }
}
