<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305TaxCodeAmountType extends AbstractModel
{
    /**
     * Used for amounts, max 3 decimals.
     *
     * @var float
     */
    protected $amount;
    /**
     * Identifies the code for the tax.
     *
     * @var string
     */
    protected $taxCode;

    /**
     * Used for amounts, max 3 decimals.
     *
     * @return float
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * Used for amounts, max 3 decimals.
     *
     * @param float $amount
     *
     * @return self
     */
    public function setAmount(?float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Identifies the code for the tax.
     *
     * @return string
     */
    public function getTaxCode(): ?string
    {
        return $this->taxCode;
    }

    /**
     * Identifies the code for the tax.
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
