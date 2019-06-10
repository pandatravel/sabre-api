<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersTaxes extends AbstractModel
{
    /**
     * Used to specify to price an itinerary without taxes.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersTaxesNoTax
     */
    protected $noTax;
    /**
     * Used to specify a tax code to exempt.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersTaxesTaxExemptItem[]
     */
    protected $taxExempt;
    /**
     * Used to specify a tax to override.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersTaxesTaxOverrideItem[]
     */
    protected $taxOverride;

    /**
     * Used to specify to price an itinerary without taxes.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersTaxesNoTax
     */
    public function getNoTax(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersTaxesNoTax
    {
        return $this->noTax;
    }

    /**
     * Used to specify to price an itinerary without taxes.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersTaxesNoTax $noTax
     *
     * @return self
     */
    public function setNoTax(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersTaxesNoTax $noTax): self
    {
        $this->noTax = $noTax;

        return $this;
    }

    /**
     * Used to specify a tax code to exempt.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersTaxesTaxExemptItem[]
     */
    public function getTaxExempt(): ?array
    {
        return $this->taxExempt;
    }

    /**
     * Used to specify a tax code to exempt.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersTaxesTaxExemptItem[] $taxExempt
     *
     * @return self
     */
    public function setTaxExempt(?array $taxExempt): self
    {
        $this->taxExempt = $taxExempt;

        return $this;
    }

    /**
     * Used to specify a tax to override.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersTaxesTaxOverrideItem[]
     */
    public function getTaxOverride(): ?array
    {
        return $this->taxOverride;
    }

    /**
     * Used to specify a tax to override.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersTaxesTaxOverrideItem[] $taxOverride
     *
     * @return self
     */
    public function setTaxOverride(?array $taxOverride): self
    {
        $this->taxOverride = $taxOverride;

        return $this;
    }
}
