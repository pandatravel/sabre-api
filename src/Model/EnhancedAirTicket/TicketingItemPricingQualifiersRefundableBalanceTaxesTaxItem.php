<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemPricingQualifiersRefundableBalanceTaxesTaxItem extends AbstractModel
{
    /**
     * "Amount" is used to specify the value associated with the tax in PQR Exchange.
     *
     * @var string
     */
    protected $amount;
    /**
     * "Code" is used to specify the tax code associated with the tax in PQR Exchange.
     *
     * @var string
     */
    protected $code;

    /**
     * "Amount" is used to specify the value associated with the tax in PQR Exchange.
     *
     * @return string
     */
    public function getAmount(): ?string
    {
        return $this->amount;
    }

    /**
     * "Amount" is used to specify the value associated with the tax in PQR Exchange.
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
     * "Code" is used to specify the tax code associated with the tax in PQR Exchange.
     *
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * "Code" is used to specify the tax code associated with the tax in PQR Exchange.
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }
}
