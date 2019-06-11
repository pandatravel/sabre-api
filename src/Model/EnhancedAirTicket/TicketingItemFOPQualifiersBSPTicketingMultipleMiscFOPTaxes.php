<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemFOPQualifiersBSPTicketingMultipleMiscFOPTaxes extends AbstractModel
{
    /**
     * @var TicketingItemFOPQualifiersBSPTicketingMultipleMiscFOPTaxesTaxItem[]
     */
    protected $tax;

    /**
     * @return TicketingItemFOPQualifiersBSPTicketingMultipleMiscFOPTaxesTaxItem[]
     */
    public function getTax(): ?array
    {
        return $this->tax;
    }

    /**
     * @param TicketingItemFOPQualifiersBSPTicketingMultipleMiscFOPTaxesTaxItem[] $tax
     *
     * @return self
     */
    public function setTax(?array $tax): self
    {
        $this->tax = $tax;

        return $this;
    }
}
