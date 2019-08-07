<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305ExchangeTravelPreferencesTPAExtensionsType extends AbstractModel
{
    /**
     * Exempt all taxes (/TE).
     *
     * @var OrgOpentravelOta200305ExchangeTravelPreferencesTPAExtensionsTypeExemptAllTaxes
     */
    protected $exemptAllTaxes;
    /**
     * Exempt all taxes and fees (/TN).
     *
     * @var OrgOpentravelOta200305ExchangeTravelPreferencesTPAExtensionsTypeExemptAllTaxesAndFees
     */
    protected $exemptAllTaxesAndFees;
    /**
     * @var OrgOpentravelOta200305TaxCodeType[]
     */
    protected $exemptTax;
    /**
     * Overrides settlement method Supported codes: BSP ARC TCH GEN (Generic TAT) RUT (Russian TAT) PRT (Philippines TAT) SAT (SATA) KRY (Killroy).
     *
     * @var string
     */
    protected $settlementMethod;
    /**
     * Specify Taxes (/TX).
     *
     * @var OrgOpentravelOta200305ExchangeTravelPreferencesTPAExtensionsTypeTaxes
     */
    protected $taxes;

    /**
     * Exempt all taxes (/TE).
     *
     * @return OrgOpentravelOta200305ExchangeTravelPreferencesTPAExtensionsTypeExemptAllTaxes
     */
    public function getExemptAllTaxes(): ?OrgOpentravelOta200305ExchangeTravelPreferencesTPAExtensionsTypeExemptAllTaxes
    {
        return $this->exemptAllTaxes;
    }

    /**
     * Exempt all taxes (/TE).
     *
     * @param OrgOpentravelOta200305ExchangeTravelPreferencesTPAExtensionsTypeExemptAllTaxes $exemptAllTaxes
     *
     * @return self
     */
    public function setExemptAllTaxes(?OrgOpentravelOta200305ExchangeTravelPreferencesTPAExtensionsTypeExemptAllTaxes $exemptAllTaxes): self
    {
        $this->exemptAllTaxes = $exemptAllTaxes;

        return $this;
    }

    /**
     * Exempt all taxes and fees (/TN).
     *
     * @return OrgOpentravelOta200305ExchangeTravelPreferencesTPAExtensionsTypeExemptAllTaxesAndFees
     */
    public function getExemptAllTaxesAndFees(): ?OrgOpentravelOta200305ExchangeTravelPreferencesTPAExtensionsTypeExemptAllTaxesAndFees
    {
        return $this->exemptAllTaxesAndFees;
    }

    /**
     * Exempt all taxes and fees (/TN).
     *
     * @param OrgOpentravelOta200305ExchangeTravelPreferencesTPAExtensionsTypeExemptAllTaxesAndFees $exemptAllTaxesAndFees
     *
     * @return self
     */
    public function setExemptAllTaxesAndFees(?OrgOpentravelOta200305ExchangeTravelPreferencesTPAExtensionsTypeExemptAllTaxesAndFees $exemptAllTaxesAndFees): self
    {
        $this->exemptAllTaxesAndFees = $exemptAllTaxesAndFees;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305TaxCodeType[]
     */
    public function getExemptTax(): ?array
    {
        return $this->exemptTax;
    }

    /**
     * @param OrgOpentravelOta200305TaxCodeType[] $exemptTax
     *
     * @return self
     */
    public function setExemptTax(?array $exemptTax): self
    {
        $this->exemptTax = $exemptTax;

        return $this;
    }

    /**
     * Overrides settlement method Supported codes: BSP ARC TCH GEN (Generic TAT) RUT (Russian TAT) PRT (Philippines TAT) SAT (SATA) KRY (Killroy).
     *
     * @return string
     */
    public function getSettlementMethod(): ?string
    {
        return $this->settlementMethod;
    }

    /**
     * Overrides settlement method Supported codes: BSP ARC TCH GEN (Generic TAT) RUT (Russian TAT) PRT (Philippines TAT) SAT (SATA) KRY (Killroy).
     *
     * @param string $settlementMethod
     *
     * @return self
     */
    public function setSettlementMethod(?string $settlementMethod): self
    {
        $this->settlementMethod = $settlementMethod;

        return $this;
    }

    /**
     * Specify Taxes (/TX).
     *
     * @return OrgOpentravelOta200305ExchangeTravelPreferencesTPAExtensionsTypeTaxes
     */
    public function getTaxes(): ?OrgOpentravelOta200305ExchangeTravelPreferencesTPAExtensionsTypeTaxes
    {
        return $this->taxes;
    }

    /**
     * Specify Taxes (/TX).
     *
     * @param OrgOpentravelOta200305ExchangeTravelPreferencesTPAExtensionsTypeTaxes $taxes
     *
     * @return self
     */
    public function setTaxes(?OrgOpentravelOta200305ExchangeTravelPreferencesTPAExtensionsTypeTaxes $taxes): self
    {
        $this->taxes = $taxes;

        return $this;
    }
}
