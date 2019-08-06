<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class TaxSummaryType extends AbstractModel
{
    /**
     * Tax Amount.
     *
     * @var float
     */
    protected $amount;
    /**
     * Tax Code.
     *
     * @var string
     */
    protected $code;
    /**
     * Country Code.
     *
     * @var string
     */
    protected $country;
    /**
     * Tax Currency Code.
     *
     * @var string
     */
    protected $currency;
    /**
     * Tax Description.
     *
     * @var string
     */
    protected $description;
    /**
     * Tax ID.
     *
     * @var int
     */
    protected $id;
    /**
     * Published tax amount.
     *
     * @var float
     */
    protected $publishedAmount;
    /**
     * Published tax currency code.
     *
     * @var string
     */
    protected $publishedCurrency;
    /**
     * Station code - airport code at which the tax or surcharge is being applied.
     *
     * @var string
     */
    protected $station;

    /**
     * Tax Amount.
     *
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * Tax Amount.
     *
     * @param float $amount
     *
     * @return self
     */
    public function setAmount(float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Tax Code.
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Tax Code.
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Country Code.
     *
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * Country Code.
     *
     * @param string $country
     *
     * @return self
     */
    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Tax Currency Code.
     *
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * Tax Currency Code.
     *
     * @param string $currency
     *
     * @return self
     */
    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Tax Description.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Tax Description.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Tax ID.
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Tax ID.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Published tax amount.
     *
     * @return float
     */
    public function getPublishedAmount(): float
    {
        return $this->publishedAmount;
    }

    /**
     * Published tax amount.
     *
     * @param float $publishedAmount
     *
     * @return self
     */
    public function setPublishedAmount(float $publishedAmount): self
    {
        $this->publishedAmount = $publishedAmount;

        return $this;
    }

    /**
     * Published tax currency code.
     *
     * @return string
     */
    public function getPublishedCurrency(): string
    {
        return $this->publishedCurrency;
    }

    /**
     * Published tax currency code.
     *
     * @param string $publishedCurrency
     *
     * @return self
     */
    public function setPublishedCurrency(string $publishedCurrency): self
    {
        $this->publishedCurrency = $publishedCurrency;

        return $this;
    }

    /**
     * Station code - airport code at which the tax or surcharge is being applied.
     *
     * @return string
     */
    public function getStation(): string
    {
        return $this->station;
    }

    /**
     * Station code - airport code at which the tax or surcharge is being applied.
     *
     * @param string $station
     *
     * @return self
     */
    public function setStation(string $station): self
    {
        $this->station = $station;

        return $this;
    }
}
