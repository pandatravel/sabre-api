<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemPricingQualifiersRefundableBalanceTaxes extends AbstractModel
{
    /**
     * @var TicketingItemPricingQualifiersRefundableBalanceTaxesTaxItem[]
     */
    protected $tax;

    /**
     * @return TicketingItemPricingQualifiersRefundableBalanceTaxesTaxItem[]
     */
    public function getTax(): ?array
    {
        return $this->tax;
    }

    /**
     * @param TicketingItemPricingQualifiersRefundableBalanceTaxesTaxItem[] $tax
     *
     * @return self
     */
    public function setTax(?array $tax): self
    {
        $this->tax = $tax;

        return $this;
    }
}
