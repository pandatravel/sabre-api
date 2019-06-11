<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemFOPQualifiersBSPTicketingMultipleFOPTaxes extends AbstractModel
{
    /**
     * @var TicketingItemFOPQualifiersBSPTicketingMultipleFOPTaxesTaxItem[]
     */
    protected $tax;

    /**
     * @return TicketingItemFOPQualifiersBSPTicketingMultipleFOPTaxesTaxItem[]
     */
    public function getTax(): ?array
    {
        return $this->tax;
    }

    /**
     * @param TicketingItemFOPQualifiersBSPTicketingMultipleFOPTaxesTaxItem[] $tax
     *
     * @return self
     */
    public function setTax(?array $tax): self
    {
        $this->tax = $tax;

        return $this;
    }
}
