<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemPricingQualifiersRefundableBalance extends AbstractModel
{
    /**
     * "Amount" is used to specify the currency amount in PQR Exchange.
     *
     * @var string
     */
    protected $amount;
    /**
     * @var TicketingItemPricingQualifiersRefundableBalanceTaxes
     */
    protected $taxes;

    /**
     * "Amount" is used to specify the currency amount in PQR Exchange.
     *
     * @return string
     */
    public function getAmount(): ?string
    {
        return $this->amount;
    }

    /**
     * "Amount" is used to specify the currency amount in PQR Exchange.
     *
     * @param string $amount
     *
     * @return self
     */
    public function setAmount(?string $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return TicketingItemPricingQualifiersRefundableBalanceTaxes
     */
    public function getTaxes(): ?TicketingItemPricingQualifiersRefundableBalanceTaxes
    {
        return $this->taxes;
    }

    /**
     * @param TicketingItemPricingQualifiersRefundableBalanceTaxes $taxes
     *
     * @return self
     */
    public function setTaxes(?TicketingItemPricingQualifiersRefundableBalanceTaxes $taxes): self
    {
        $this->taxes = $taxes;

        return $this;
    }
}
