<?php

namespace Ammonkc\SabreApi\Model\OrderManagement;

use Ammonkc\SabreApi\AbstractModel;

class Tax extends AbstractModel
{
    /**
     * Contains monetary information.
     *
     * @var AmountCurrency
     */
    protected $amount;
    /**
     * The two-letter [ISO 3166-1](https://www.iso.org/obp/ui/#search/code/) country code.
     *
     * @var string
     */
    protected $countryCode;
    /**
     * The tax code.
     *
     * @var string
     */
    protected $taxCode;
    /**
     * The tax type. Can be F-fixed, or P-percent.
     *
     * @var string
     */
    protected $taxType;
    /**
     * Tax description used for fulfillment.
     *
     * @var string
     */
    protected $description;

    /**
     * Contains monetary information.
     *
     * @return AmountCurrency
     */
    public function getAmount(): ?AmountCurrency
    {
        return $this->amount;
    }

    /**
     * Contains monetary information.
     *
     * @param AmountCurrency $amount
     *
     * @return self
     */
    public function setAmount(?AmountCurrency $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * The two-letter [ISO 3166-1](https://www.iso.org/obp/ui/#search/code/) country code.
     *
     * @return string
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * The two-letter [ISO 3166-1](https://www.iso.org/obp/ui/#search/code/) country code.
     *
     * @param string $countryCode
     *
     * @return self
     */
    public function setCountryCode(?string $countryCode): self
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * The tax code.
     *
     * @return string
     */
    public function getTaxCode(): ?string
    {
        return $this->taxCode;
    }

    /**
     * The tax code.
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

    /**
     * The tax type. Can be F-fixed, or P-percent.
     *
     * @return string
     */
    public function getTaxType(): ?string
    {
        return $this->taxType;
    }

    /**
     * The tax type. Can be F-fixed, or P-percent.
     *
     * @param string $taxType
     *
     * @return self
     */
    public function setTaxType(?string $taxType): self
    {
        $this->taxType = $taxType;

        return $this;
    }

    /**
     * Tax description used for fulfillment.
     *
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Tax description used for fulfillment.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
