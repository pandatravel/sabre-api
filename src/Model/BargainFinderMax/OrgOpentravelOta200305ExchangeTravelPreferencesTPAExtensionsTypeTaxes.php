<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305ExchangeTravelPreferencesTPAExtensionsTypeTaxes extends AbstractModel
{
    /**
     * @var OrgOpentravelOta200305TaxCodeType[]
     */
    protected $isRefundable;
    /**
     * @var OrgOpentravelOta200305TaxCodeAmountType[]
     */
    protected $tax;

    /**
     * @return OrgOpentravelOta200305TaxCodeType[]
     */
    public function getIsRefundable(): ?array
    {
        return $this->isRefundable;
    }

    /**
     * @param OrgOpentravelOta200305TaxCodeType[] $isRefundable
     *
     * @return self
     */
    public function setIsRefundable(?array $isRefundable): self
    {
        $this->isRefundable = $isRefundable;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305TaxCodeAmountType[]
     */
    public function getTax(): ?array
    {
        return $this->tax;
    }

    /**
     * @param OrgOpentravelOta200305TaxCodeAmountType[] $tax
     *
     * @return self
     */
    public function setTax(?array $tax): self
    {
        $this->tax = $tax;

        return $this;
    }
}
