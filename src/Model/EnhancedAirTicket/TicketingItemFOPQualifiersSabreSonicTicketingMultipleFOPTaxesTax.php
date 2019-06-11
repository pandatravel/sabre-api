<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOPTaxesTax extends AbstractModel
{
    /**
     * "Amount" is used to specify the tax amount.
     *
     * @var string
     */
    protected $amount;
    /**
     * "TaxCode" is used to specify the tax code.
     *
     * @var string
     */
    protected $taxCode;

    /**
     * "Amount" is used to specify the tax amount.
     *
     * @return string
     */
    public function getAmount(): ?string
    {
        return $this->amount;
    }

    /**
     * "Amount" is used to specify the tax amount.
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
     * "TaxCode" is used to specify the tax code.
     *
     * @return string
     */
    public function getTaxCode(): ?string
    {
        return $this->taxCode;
    }

    /**
     * "TaxCode" is used to specify the tax code.
     *
     * @param string $taxCode
     *
     * @return self
     */
    public function setTaxCode(?string $taxCode): self
    {
        $this->taxCode = $taxCode;

        return $this;
    }
}
