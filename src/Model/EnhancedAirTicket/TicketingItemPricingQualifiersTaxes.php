<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemPricingQualifiersTaxes extends AbstractModel
{
    /**
     * @var TicketingItemPricingQualifiersTaxesNoTax
     */
    protected $noTax;
    /**
     * @var TicketingItemPricingQualifiersTaxesTaxExemptItem[]
     */
    protected $taxExempt;

    /**
     * @return TicketingItemPricingQualifiersTaxesNoTax
     */
    public function getNoTax(): ?TicketingItemPricingQualifiersTaxesNoTax
    {
        return $this->noTax;
    }

    /**
     * @param TicketingItemPricingQualifiersTaxesNoTax $noTax
     *
     * @return self
     */
    public function setNoTax(?TicketingItemPricingQualifiersTaxesNoTax $noTax): self
    {
        $this->noTax = $noTax;

        return $this;
    }

    /**
     * @return TicketingItemPricingQualifiersTaxesTaxExemptItem[]
     */
    public function getTaxExempt(): ?array
    {
        return $this->taxExempt;
    }

    /**
     * @param TicketingItemPricingQualifiersTaxesTaxExemptItem[] $taxExempt
     *
     * @return self
     */
    public function setTaxExempt(?array $taxExempt): self
    {
        $this->taxExempt = $taxExempt;

        return $this;
    }
}
