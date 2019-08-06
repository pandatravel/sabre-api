<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305TaxCodeType extends AbstractModel
{
    /**
     * Identifies the code for the tax.
     *
     * @var string
     */
    protected $taxCode;

    /**
     * Identifies the code for the tax.
     *
     * @return string
     */
    public function getTaxCode(): string
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
    public function setTaxCode(string $taxCode): self
    {
        $this->taxCode = $taxCode;

        return $this;
    }
}
